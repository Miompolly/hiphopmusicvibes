<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\LoginRequest;

class UsersController extends Controller
{
    //

    public function createUser(UsersRequest $request)
    {
        $user = new Users();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect('/login')->with('message', 'User created successfully!');
    }

    public function loginUser(LoginRequest $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $user = Users::where('email', $email)->first();


        if ($user && password_verify($password, $user->password)) {

            return redirect('/');
        } else {

            return redirect('/login')->with('error', 'Invalid credentials');
        }


    }
}



