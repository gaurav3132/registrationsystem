<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Usercontroller extends Controller
{
    function savedata(Request $req)
    {
        $User=new User;
        $User->Name=$req->name;
        $User->username=$req->username;
        $User->phonenumber=$req->phonenumber;
        $User->password=$req->password;
        if ($req->password == $req->confirmpassword)
        {
            $User->password=md5($req->password);
            $User->save();
            $message="registration success";
            $req->session()->flash('message',$message);
            return redirect("/");
        }
        else
        {
            $message="Passwords doesnot match";
            $req->session()->flash('message',$message);
            return redirect("/");      
        }

    }

    function login(Request $req)
    {
        $User=User::where(['username'=>$req->username])->first();
        if($User){
            if($User->password==md5($req->password))
            {
                $req->session()->put('user',$User->username);
                return view("profile");
            }
            else{
                $message="Username and password doesnot match";
                $req->session()->flash('message',$message);
                return redirect("login");   
            }
        }
        else{
            $message="Please enter valid username";
            $req->session()->flash('message',$message);
            return redirect("login");   

        }
        
}
}
