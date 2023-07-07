<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Log;
use Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Jobs\CalculateBoosterIncome;

class RegistrationController extends Controller
{
  function register(request $req)
  {
    return view("user-auth.registration");
  }
  function registerPost(Request $req)
  {
    $req->validate([
      "fname" => "required|min:3|max:50",
      "lname" => "required|min:3|max:50",
      // "email" => "required|email|unique:registration,email",
      // "phone" => "required|min:10|max:10|unique:registration,phone",
      "email" => "required|email",
      "phone" => "required|min:10|max:10",
      "password" => "required|min:8",
      "confirmPassword" => "required|same:password",
      "referral_code" => "required",
      "agreement" => "required"
    ]);
    $log = Log::createLog('',"User Registration",json_encode($req->all()),'Registration Pending');
    $res = Registration::createUser($req->all());
    $lastInsertId = $res['id'];
    $email = $res['email'];
    //Now Fire booster income Jobs 
    CalculateBoosterIncome::dispatch($req->post("referral_code"));
    if (!empty($lastInsertId)) {
      $otp = mt_rand(100000, 999999);
      $expire_time = now();
      $request = Registration::where('id', $lastInsertId)->update(['otp' => $otp, 'expire_time' => $expire_time]);

      $emailToSend = $email; // Assign the email to a separate variable
      Mail::send('emails.registration_otp', ['otp' => $otp], function ($message) use ($emailToSend) {
        $message->to($emailToSend);
        $message->subject('Mail from EuroMall');
      });
      Log::updateLog($log,"User Created Successfully");
      $req->session()->flash("success", "User Created Successfully, Please Verify Email.");
      return redirect("/otp");

    } else {
      $req->session()->flash("error ", "Please Try again! .");
      return redirect("/signin");
    }
  }

  function otp(request $req)
  {
    return view("user-auth.otp");
  }


 function otp_check(Request $req)
  {
    $req->validate([
      "otp" => "required|min:6|max:6"
    ]);
    $updatePassword = Registration::where(['otp' => $req->otp])->first();
    if (!empty($updatePassword)) {
      $date = Carbon::parse($updatePassword->expire_time);
      $now = Carbon::now();
      $timeDifference = $now->diffInMinutes($date);
      if ($timeDifference > 15) {
        return back()->withInput()->with('error', 'OTP Has Been Expired!');
      } else {
       Registration::where(['userid' => $updatePassword->userid])->update(['is_verify' => 1]);
       $updatedUser = Registration::where('userid', $updatePassword->userid)->first(['userid', 'first_name','last_name','email']);
        // Access the user ID and name from the updated record
        $userId = $updatedUser->userid;
        $first_name = $updatedUser->first_name;
        $last_name = $updatedUser->last_name;
        $emailToSend = $updatedUser->email;
         Mail::send('emails.registration_deatils', ['userId'=>$userId,'first_name' =>$first_name,'last_name'=>$last_name], function ($message) use ($emailToSend) {
        $message->to($emailToSend);
        $message->subject('Mail from EuroMall');
      }); 

        $req->session()->flash("success", "OTP Verfied Successfully, Please Check Your Email. !.");
        return redirect("/signin");
      }
    } else {
      $req->session()->flash('error', 'Please Enter Correct OTP.');
      return redirect()->back();
    }
  }

  function edit_profile(request $req)
  {
    $user = Session::get('user');
    $editprofile = Registration::where('userid', $user['userid'])->first();
    return view('user-auth.edit_profile', compact('editprofile'));
  }
  function edit_profilePost(Request $req)
  {

    $req->validate([
      "user_id" => "required",
      "fname" => "required|min:3|max:50",
      "lname" => "required|min:3|max:50",
      "email" => "required|email",
      "phone" => "required|min:10|max:10",
    ]);
    Log::createLog('',"Update Profile",json_encode($req->all()),'Profile Successfully updated.');
    $res = Registration::editprofile($req->all());
    if (!empty($res)) {
      $req->session()->flash("success", "Profile Successfully updated.");
      return redirect("/empanel/edit-profile");
    }
  }
  function login()
  {
    return view("user-auth.login");
  }

  public function processLogin(Request $request)
  {
    $log = Log::createLog('',"Login",json_encode($request->all()),'Login Failed');
    $rule = array(
      'user_id' => 'required',
      'password' => 'required'
    );
    $messages = array(
      'user_id.required' => 'User ID is required',
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
    $user = Registration::where("userid", $cred['user_id'])->first();
    if (!empty($user)) {
      if (!Hash::check($cred['password'], $user->password)) {
        $message = 'password is incorrect';
        return redirect()->back()->with('error', $message)->withInput();
      } else {
        if ($user->is_verify == 0) {
          $message = 'Please verfiy Mail Id!';
          return redirect()->back()->with('error', $message)->withInput();
        }
        $data = [
          'first_name' => $user->first_name,
          'last_name' => $user->last_name,
          'userid' => $user->userid,
          'email' => $user->email,
          "id" => $user->id,
        ];
        Log::updateLog($log,json_encode($data),$user->id);
        Session::put('user', $data);
        $message = 'Successfully login!';
        return redirect()->to('/empanel/dashboard')->with('success', $message);
      }
    } else {
      $message = 'username or password is incorrect';
      return redirect()->back()->with('error', $message)->withInput();
    }
  }

  //create logout function 
  public function logout(): RedirectResponse
  {
    Log::createLog('',"Logout","",'Successfully logged out.');
    Session::flush();
    // Perform any other necessary cleanup or logout actions
    $message = 'Successfully Logout!';
    return redirect('/')->with('success', $message);
  }

}