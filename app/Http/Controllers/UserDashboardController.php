<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon; 
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\Withdraw;
use DB;
use Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class UserDashboardController extends Controller
{
    function index(Request $req)
    {
        $user_session = $req->session()->get("user");
        $user = Registration::getUserDetails($user_session['userid']);
        return view("dashboard",compact("user"));
    }

    function transaction_password(request $req)
    {
        return view("user-auth.transaction_password");
    }

    function transaction_passwords(request $req)
    {
        $req->validate([
            "user_id"=>"required",
            "email"=>"required",
        ]);
        $userid = $req->user_id;
        $email = $req->email;
        if (!empty($userid)) {
            $otp = mt_rand(100000, 999999);
            $expire_time = now();
            $data = Registration::where(array('userid'=>$userid,'email'=>$email))->first();
            $request = Registration::where(array('userid'=>$userid,'email'=>$data->email,'phone'=>$data->phone))->update(['otp' => $otp, 'expire_time' => $expire_time]);
            $emailToSend = $data->email; // Assign the email to a separate variable
            Mail::send('emails.transaction_password_otp', ['otp' => $otp], function ($message) use ($emailToSend) {
                $message->to($emailToSend);
                $message->subject('Mail from EuroMall');
            });
            $req->session()->flash("success","OTP Send Successfully, Please Check Your Email.");
            return redirect("/empanel/transaction_otp");

        }else
        {
            $req->session()->flash("error ","Please Try again! .");
            return redirect("/signin");
        }
    }

    function transaction_otp(){
        return view("user-auth.transaction_password_otp");
    }

    function transaction_password_check(Request $req)
    {
        $req->validate([
            "otp"=>"required|min:6|max:6",
            "password"=>"required|min:8",
            "password_confirmation"=>"required|same:password",
        ]);
        $updatePassword = Registration::where(['otp' => $req->otp])->first();
        if(!empty($updatePassword)){
            $date = Carbon::parse($updatePassword->expire_time);
            $now = Carbon::now();
            $timeDifference = $now->diffInMinutes($date);
            if ($timeDifference > 15) {
                return back()->withInput()->with('error', 'OTP Has Been Expired!');
            }else
            {
                Registration::where(['userid'=> $updatePassword->userid])->update(['transaction_password' => Hash::make($req->password)]);
                $req->session()->flash("success","Transaction Password Change Successfully !.");
                return redirect("/empanel/dashboard");
            }
        }else{
           $req->session()->flash('error', 'Please Enter Correct OTP.');
            return redirect()->back();
        }
    }

public function my_referral(Request $request)
{
    if ($request->ajax()) {
        $user = Session::get('user');
        $userreferral = Registration::where('userid', $user['userid'])->first();

        // Retrieve the necessary data for the DataTable
        $data = Registration::select('userid', 'first_name', 'last_name', 'phone', 'status', 'position')
            ->where('referral_code', $userreferral['referral_right'])
            ->orWhere('referral_code', $userreferral['referral_left']);

        return DataTables::of($data)
            ->addIndexColumn()
            ->toJson();
    }

    return view('user-auth.my-referral');
}
public function my_team(Request $request)
{
    if ($request->ajax()) {
    $user = Session::get('user');
    $userReferral = Registration::where('userid', $user['userid'])->first();
    $searchValue = $userReferral['id'];

    $data = Registration::select('userid', 'first_name', 'last_name', 'phone', 'status', 'position')
        ->whereRaw('FIND_IN_SET("'.$searchValue.'", parent_id)');

    return DataTables::of($data)
        ->addIndexColumn()
        ->toJson();
    }
     return view('user-auth.my-team');
}


public function investment(Request $request)
{
    if ($request->ajax()) {
        $user = Session::get('user');
        $userreferral = Registration::where('userid', $user['userid'])->first();
        // Retrieve the necessary data for the DataTable
        $data = DB::table('investment')
            ->select('user_id', 'amount', 'status', 'created_at')
            ->where('user_id', $userreferral['userid'])
            ->get();


        return DataTables::of($data)
            ->addIndexColumn()
            ->toJson();
    }
    return view('user-auth.investment');
}
public function withdraw(Request $request)
{
    if ($request->ajax()) {
        $user = Session::get('user');
        $userreferral = Registration::where('userid', $user['userid'])->first();
        // Retrieve the necessary data for the DataTable
        $data = DB::table('withdraw')
            ->select('user_id', 'amount','trans_charge','remarks', 'status', 'created_at')
            ->where('user_id', $userreferral['userid'])
            ->get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->toJson();
    }
    return view('user-auth.withdraw');
}

    function add_withdraw(Request $req)
    {
        $req->validate([
            "amount" => "required|numeric",
            "remarks"=>"required",
            "user_id"=>"required",
        ]);

         Withdraw::create($req->all());
     
          $req->session()->flash('success','Withdraw Request created successfully.');
            return redirect("/empanel/withdraw");
    }
    
    function my_tree(){
      return view("user-auth.my-tree");  
    }

}