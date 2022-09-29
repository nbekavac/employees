<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


//All Employees
Route::get('/', function () {
    return view('employees',[
        'heading' => 'Employees' ,
        'employees' => User::all()
    ]);
});

//Single Employee
Route::get('/employees/{id}', function($id) {
    return view('employee', [
        'employee' => User::find($id)
    ]);
});

//Show Employee Create Form
Route::get('/createemployee' , [UserController::class, 'create']);

//Create New User
Route::post('/users', [UserController::class, 'store']);

