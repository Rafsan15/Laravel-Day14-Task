<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function Home()
    {
        return view("Home");
    }
    public function UserRegisterForm()
    {
        return view("user_register");
    }
    public function UserRegisterData()
    {
//        $this->validate(request(),[
//            'username'=>'required|alpha_dash',
//            'firstname'=>'required',
//            'lastname'=>'required',
//            'email'=>'required',
//            'password'=>'required|confirmed',
//            'phone'=>'required',
//        ]);
        User::create([
            'username'=>request('UserName'),
            'firstname'=>request('FirstName'),
            'lastname'=>request('LastName'),
            'email'=>request('Email'),
            'password'=>request('Password'),
            'phone'=>request('Phone'),
            'address'=>request('Address'),
            'gender'=>request('Gender'),
        ]);
        return "Hello";
    }

    public function DashBoard()
    {
        $users=User::latest()->get();
        return view('manage_users',compact('users'));

    }
    public function FindSingleUser()
    {
        if(request('Key')==null){
            return redirect()->action('UserController@DashBoard');
        }
       $users = User::where('firstname',request('Key') )->get();
       if(sizeof($users)==0) {$users = User::where('email',request('Key') )->get();}
       if(sizeof($users)==0) {$users = User::where('lastname',request('Key') )->get();}
       if(sizeof($users)==0) {$users = User::where('phone',request('Key') )->get();}
       if(sizeof($users)!=0) {
           return view('manage_users',compact('users'));

       }


        return "No User Found";
    }
   public function UserEditForm($id)
   {
       $user=User::find($id);
       return view('user_edit',compact('user'));
   }

   public function DeleteRow($id)
   {
       $deletedRows = user::where('id', $id)->delete();
       return redirect()->action('UserController@DashBoard');
   }


    public function AboutUs()
    {
        return view("user_about");
    }
    public function ContactUs()
    {
        return view("user_contactUs");
    }
}
