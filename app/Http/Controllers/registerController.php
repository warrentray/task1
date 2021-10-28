<?php

namespace App\Http\Controllers;
use App\Models\register;
use Illuminate\Http\Request;
class registerController extends Controller
{
   public function index(){
    $register = register::all();
    return view('file.view', ['register' => $register]);
   }

    public function create()
    {
        return view('file.register');
    }

    function store(Request $request){
        $register = new register;
        $register->name = $request->input('name');
        $register->email = $request->input('email'); 
        $register->password = $request->input('password');
        $register->save();
        return redirect()->back()->with('status','Conculation as a new member');
         
    }

    public function destroy($id)
    {
        $register = register::find($id);
        $register->delete();
        return redirect()->back()->with('status','Member Deleted  ');
    }
    public function edit($id)
    {
        $register = register::find($id);
        return view('file.edit', ['register' => $register]);
    }

    public function update(Request $request, $id)
    {
        $register = register::find($id);
        $register->name = $request->input('name');
        $register->email = $request->input('email'); 
        $register->password = $request->input('password');
        $register->update();
        return redirect()->back()->with('status',' Updated Successfully');
    }
}
