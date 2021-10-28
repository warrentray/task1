<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('view', [registerController::class, 'index']);
Route::get('new-register', [registerController::class, 'create']);
Route::post('new-register', [registerController::class, 'store']);
Route::get('edit-register/{id}', [registerController::class, 'edit']);
Route::put('update/{id}', [registerController::class, 'update']);
Route::get('delete-register/{id}', [registerController::class, 'destroy']);
 
