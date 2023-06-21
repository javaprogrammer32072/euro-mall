<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
use App\Models\Registration;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

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

    public function processLogin(Request  $request)
    {
        $rule = array(
            'user_id' => 'required',
            'password' => 'required'
        );
        $messages = array(
            'user_id.required' => 'User ID is required',
            'password.required' => 'Password is required',
        );
        $validation = Validator::make($request->all(), $rule, $messages);
        if ($validation->fails()){
            return redirect()->back()->withInput()->withErrors($validation);
        }
        $cred = [
            'user_id' => $request->user_id,
            'password' => $request->password,
        ];
        $user = Registration::where("userid", $cred['user_id'])->first();
        if(!empty($user))
        {
            if( ! Hash::check($cred['password'] , $user->password ) )
            {
                $message = 'password is incorrect';
                return redirect()->back()->with('error', $message)->withInput();
            }else
            {
                if($user->is_verify == 0){
                    $message = 'Please verfiy Mail Id!';
                    return redirect()->back()->with('error', $message)->withInput();
                }
                $data=[
                    'first_name' => $user->first_name,
                    'last_name' =>$user->last_name,
                    'userid' =>$user->userid,
                    'email' =>$user->email,
                ];

                Session::put('user', $data);
                return Redirect()->to('/dashboard');
                $message = 'Successfully login!';
                return redirect()->back()->with('success', $message)->withInput();
            }
        }else{
            $message = 'username or password is incorrect';
            return redirect()->back()->with('error', $message)->withInput();
        }
    }

    //create logout function 
    public function logout(): RedirectResponse
    {
        Session::flush();
        // Perform any other necessary cleanup or logout actions
        return redirect()->route('signin');
    }
}