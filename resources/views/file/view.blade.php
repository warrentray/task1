
<style> body {
	background: #fafafa url(https://jackrugile.com/images/misc/noise-diagonal.png);
	color: #444;
	font: 100%/30px 'Helvetica Neue', helvetica, arial, sans-serif;
	text-shadow: 0 1px 0 #fff;
}

strong {
	font-weight: bold; 
}

em {
	font-style: italic; 
}

table {
	background: #f5f5f5;
	border-collapse: separate;
	box-shadow: inset 0 1px 0 #fff;
	font-size: 12px;
	line-height: 24px;
	margin: 30px auto;
	text-align: left;
	width: 800px;
}	

th {
	background: url(https://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
	border-left: 1px solid #555;
	border-right: 1px solid #777;
	border-top: 1px solid #555;
	border-bottom: 1px solid #333;
	box-shadow: inset 0 1px 0 #999;
	color: #fff;
  font-weight: bold;
	padding: 10px 15px;
	position: relative;
	text-shadow: 0 1px 0 #000;	
}

th:after {
	background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
	content: '';
	display: block;
	height: 25%;
	left: 0;
	margin: 1px 0 0 0;
	position: absolute;
	top: 25%;
	width: 100%;
}

th:first-child {
	border-left: 1px solid #777;	
	box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
	box-shadow: inset -1px 1px 0 #999;
}

td {
	border-right: 1px solid #fff;
	border-left: 1px solid #e8e8e8;
	border-top: 1px solid #fff;
	border-bottom: 1px solid #e8e8e8;
	padding: 10px 15px;
	position: relative;
	transition: all 300ms;
}

td:first-child {
	box-shadow: inset 1px 0 0 #fff;
}	

td:last-child {
	border-right: 1px solid #e8e8e8;
	box-shadow: inset -1px 0 0 #fff;
}	

tr {
	background: url(https://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:nth-child(odd) td {
	background: #f1f1f1 url(https://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:last-of-type td {
	box-shadow: inset 0 -1px 0 #fff; 
}

tr:last-of-type td:first-child {
	box-shadow: inset 1px -1px 0 #fff;
}	

tr:last-of-type td:last-child {
	box-shadow: inset -1px -1px 0 #fff;
}	

tbody:hover td {
	color: transparent;
	text-shadow: 0 0 3px #aaa;
}

tbody:hover tr:hover td {
	color: #444;
	text-shadow: 0 1px 0 #fff;


}
button{
		appearance: none;
		outline: 0;
		background-color: white;
		border: 0;
		padding: 10px 10px;
		border-radius: 3px;
		width: 200px;
        background-color: greenyellow;
		cursor: pointer;
		font-size: 18px;
		transition-duration: 0.25s;
        margin-right:10px
	}
    	</style>
<h1 style="text-align: center;">View Data </h1>
<button  ><a href="\new-register" style="margin-right:10px;">Add member</a></button>
    <table cellpadding="0" cellspacing="0" border="0">
        <div class="tbl-header">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PASSWORD</th>
	  <th></th>
	  <th></th>
    </tr>
  </thead>
  <tbody>
      @foreach($register as $registerdata)
    <tr>
      <td>  {{ $registerdata->id }}</td>
      <td> {{ $registerdata->name }}</td>
      <td> {{ $registerdata->email }}</td>
      <td> {{ $registerdata->password }}</td>
	  <td>   <a href="{{ url('edit-register/'.$registerdata->id) }}" class="btn btn-primary btn-sm">Edit</a> </td>
	  <td> 
		  <a href="{{ url('delete-register/'.$registerdata->id) }}" class="btn btn-danger btn-sm">Delete</a></td>
    </tr>
     @endforeach
	 
  </tbody>
</table>
