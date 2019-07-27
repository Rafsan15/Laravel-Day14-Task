<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LogInController extends Controller
{
    public function UserLoginForm()
    {
        return view("user_login");
    }
    public function UserLoginData()
    {
        $user = User::where('email', request('Email'))->first();
        if($user==null){
            return "User Name & Password are wrong";
        }
        if($user->password==\request('Password')){
            return redirect()->action('UserController@DashBoard');
        }
        return "User Name & Password are wrong";
    }
}
