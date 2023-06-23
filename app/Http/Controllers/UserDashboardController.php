<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class UserDashboardController extends Controller
{
    function index(Request $req)
    {
        $user_session = $req->session()->get("user");
        $user = Registration::getUserDetails($user_session['userid']);
        return view("dashboard",compact("user"));
    }
}
