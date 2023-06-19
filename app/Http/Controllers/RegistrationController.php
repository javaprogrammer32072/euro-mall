<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    function register(request $req)
    {
        return view("user-auth.registration");
    }
    function login(request $req)
    {
        return view("user-auth.login");
    }
}
