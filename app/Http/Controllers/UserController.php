<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Show Employee Create Form
    public function create(){
        return view('users.create');
    }

    //Store
    public function store(Request $request){
        $formFields = $request->validate([
            'email' =>['required'],
            'password' => 'required|confirmed|min:6',
            'firstname' =>['required', 'min:3'],
            'lastname' =>['required', 'min:3'],
            'picture' =>['required' ],
            'gender' =>['required'],
            'dateofbirth' =>['required'],
            'firstday' =>['required'],
            'contracttype' =>['required'],
            'contractlength' =>['required'],
            'department' =>['required'],
            'vacationdays' =>['required'],
            'freedays' =>['required'],
            'sickleave' =>['required']
        ]);

    //Hash Password
    $formFields['password']=bcrypt($formFields['password']);

    //Create User
    $user=User::create($formFields);
    

    auth()->login($user);
    return redirect('/')->with('message', 'User created');

    }
}
