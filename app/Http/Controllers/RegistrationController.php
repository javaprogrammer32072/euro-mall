<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Registration;
use Illuminate\Support\Facades\Hash;

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

    public function processLogin(Request  $request){

         $rule = array(
            'user_id' => 'required',
            'password' => 'required'
        );
        $messages = array(
            'user_id.required' => 'User ID  address is required',
            'password.required' => 'Password is required',
        );


          $validation = Validator::make($request->all(), $rule, $messages);
        if ($validation->fails()) {
            return redirect()->back()->withInput()->withErrors($validation);
        }

            $cred = [
                'user_id' => $request->user_id,
                'password' => $request->password,
            ];
            // $hashedPassword = Hash::make($cred['password']);
            $user = Registration::where("userid", $cred['user_id'])->where("password", $cred['password'])->first();
        
            if(!empty($user)){
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
            }else{
            $message = 'username or password is incorrect';
                return redirect()->back()->with('error', $message)->withInput();
            }
        
 
    

    }
}