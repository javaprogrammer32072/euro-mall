<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    function register(request $req)
    {
        return view("user-auth.registration");
    }
    function registerPost(Request $req)
    {
        $req->validate([
            "fname"=>"required|min:3|max:50",
            "lname"=>"required|min:3|max:50",
            "email"=>"required|email",
            "phone"=>"required|min:10|max:10",
            "password"=>"required|min:8",
            "confirmPassword"=>"required|same:password",
            "referral_code"=>"required",
            "agreement"=>"required"
        ]);
        $res = Registration::createUser($req->all());
        $req->session()->flash("success","Successfully User Created, Please Verify Email.");
        return redirect("/signin");
    }
    function login(request $req)
    {
        return view("user-auth.login");
    }
}
