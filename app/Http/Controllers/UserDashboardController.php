<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Registration;
use App\Models\My_team;
use App\Models\My_referral;
use App\Models\Investment;
use App\Models\Withdraw;
use App\Models\ROI;
use App\Models\Matching;
use App\Models\BoosterIncome;
use App\Models\Log;
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
    $package = DB::table("packages")->select("id",'amount')->get();

    $myTeam = My_team::my_team(); // Get the data from the My_team model
    $myReferral = My_referral::my_referral(); // Get the data from the My_referral model
    $investment = Investment::investment(); // Get the data from the investment model
    $withdraw = Withdraw::withdraw(); // Get the data from the withdraw model   
    $roi = ROI::total_roi(); // Get the data from the ROI model
    $Matching = Matching::total_Matching(); // Get the data from the Matching model 
     $booster_income = BoosterIncome::booster_income(); // Get the data from the Matching model 
    return view("dashboard", compact("user", "myTeam", "myReferral", "investment", "withdraw", "roi", "Matching","booster_income",'package'));
  }

  function transaction_password(request $req)
  {
    return view("user-auth.transaction_password");
  }

  function transaction_passwords(request $req)
  {
    $req->validate([
      "user_id" => "required",
      "email" => "required",
    ]);
    $log = Log::createLog('',"Change Transaction Send OTP",json_encode($req->all()),'OTP Send Successfully, Please Check Your Email.');
    $userid = $req->user_id;
    $email = $req->email;
    if (!empty($userid)) {
      $otp = mt_rand(100000, 999999);
      $expire_time = now();
      $data = Registration::where(array('userid' => $userid, 'email' => $email))->first();
      $request = Registration::where(array('userid' => $userid, 'email' => $data->email, 'phone' => $data->phone))->update(['otp' => $otp, 'expire_time' => $expire_time]);
      $emailToSend = $data->email; // Assign the email to a separate variable
      Mail::send('emails.transaction_password_otp', ['otp' => $otp], function ($message) use ($emailToSend) {
        $message->to($emailToSend);
        $message->subject('Mail from EuroMall');
      });
      $req->session()->flash("success", "OTP Send Successfully, Please Check Your Email.");
      return redirect("/empanel/transaction_otp");

    } else {
      $req->session()->flash("error ", "Please Try again! .");
      return redirect("/signin");
    }
  }

  function transaction_otp()
  {
    return view("user-auth.transaction_password_otp");
  }

  function transaction_password_check(Request $req)
  {
    $req->validate([
      "otp" => "required|min:6|max:6",
      "password" => "required|min:8",
      "password_confirmation" => "required|same:password",
    ]);
    $log = Log::createLog('',"Change Transaction Password",json_encode($req->all()),'');
    $updatePassword = Registration::where(['otp' => $req->otp])->first();
    if (!empty($updatePassword)) {
      $date = Carbon::parse($updatePassword->expire_time);
      $now = Carbon::now();
      $timeDifference = $now->diffInMinutes($date);
      if ($timeDifference > 15) {
        Log::update($log,"OTP has been Expired!");
        return back()->withInput()->with('error', 'OTP has been Expired!');
      } else {
        Log::update($log,"Transaction Password Change Successfully !.");
        Registration::where(['userid' => $updatePassword->userid])->update(['transaction_password' => Hash::make($req->password)]);
        $req->session()->flash("success", "Transaction Password Change Successfully !.");
        return redirect("/empanel/dashboard");
      }
    } else {
      Log::update($log,"Invalid OTP.");
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
        ->whereRaw('FIND_IN_SET("' . $searchValue . '", parent_id)');

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
      $userreferral = DB::table("registration")
        ->join('investment', 'investment.user_id', '=', 'registration.id')
        ->select('registration.userid', 'investment.amount', 'investment.status', 'investment.created_at')
        ->where('registration.id', $user['id'])
        ->get();

      return DataTables::of($userreferral)
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
        ->select('user_id', 'amount', 'trans_charge', 'remarks', 'status', 'created_at')
        ->where('user_id', $userreferral['userid'])
        ->where('status', 1)
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
      "remarks" => "required",
      "user_id" => "required",
    ]);

    Withdraw::create($req->all());

    $req->session()->flash('success', 'Withdraw Request created successfully.');
    return redirect("/empanel/withdraw");
  }

  function my_tree(Request $req)
  {
    $user = Session::get('user');
    $id = $req->get("tree");
    if (empty($id))
      $id = $user['id'];
    $data = Registration::getOneLeftRightChild($id);
    // echo "<pre>";
    // print_r($data);
    return view("user-auth.my-tree", compact("data"));
  }


  function investAmountPost(Request $req)
  {
    $amount = $req->post("amount");
    $password = $req->post("password");
    $user = $req->session()->get("user");
    $check_user = Registration::where("userid", $user['userid'])->first();
    $log = Log::createLog('',"Invest Amount",json_encode($req->all()),'');
    if (!Hash::check($password, $check_user->transaction_password)) {
      Log::updateLog($log,"Incorrect Transaction Password");
      $req->session()->flash("error", "Incorrect Transaction Password");
      return redirect("/empanel/dashboard");
    } 
    else 
    {
      // Now De-Active Previous Investment 
      $in = Investment::where("user_id",'=',$check_user->id)->update(['status'=>2]);

      // Now Find Previous Investment of user
      $p_inv = Investment::where("user_id",'=',$check_user->id)->where("status",'=',2)->orderBy("id",'DESC')->first();
      if(!empty($p_inv))
      {
        if($p_inv->amount>$amount)
        {
          Log::updateLog($log,"Please Invest greater then or equal to $p_inv->amount ");
          $req->session()->flash("error", "Please Invest greater then or equal to $p_inv->amount ");
          return redirect("/empanel/dashboard");
        }
      }
      // Now Save Data Into Investment Table 
      $inv = new Investment();
      $inv->amount = $amount;
      $inv->user_id = $check_user->id;
      $inv->status = 1;
      if ($inv->save()) {
        // Now Active user with status 1
        Registration::where("userid", $user['userid'])->update(['status' => 1]);
        Log::updateLog($log,"Successfully Invested Amount");
        $req->session()->flash("success", "Successfully Invested Amount");
        return redirect("/empanel/dashboard");
      } else {
        Log::updateLog($log,"Something Went Wrong!");
        $req->session()->flash("error", "Something Went Wrong!");
        return redirect("/empanel/dashboard");
      }
    }
  }
public function view_roi(Request $request)
  {
    if ($request->ajax()) {
      $user = Session::get('user');

      $userreferral = DB::table("registration")
        ->join('roi', 'roi.user_id', '=', 'registration.id')
        ->select('registration.userid', 'roi.amount_per_day', 'roi.created_at')
        ->where('registration.id', $user['id'])
        ->get();

      return DataTables::of($userreferral)
        ->addIndexColumn()
        ->toJson();
    }
    return view('user-auth.roi');
  }
  public function view_matching(Request $request)
  {
    if ($request->ajax()) {
      $user = Session::get('user');
      $userreferral = DB::table("registration")
        ->join('matching', 'matching.user_id', '=', 'registration.id')
        ->select('registration.userid', 'matching.user_id', 'matching.left_buss', 'matching.right_buss', 'matching.amount', 'matching.carry_amount', 'matching.flush_amt', 'matching.carry_side', 'matching.status', 'matching.created_at')
        ->where('registration.id', $user['id'])
         ->where('matching.status', 1)
        ->get();

      return DataTables::of($userreferral)
        ->addIndexColumn()
        ->toJson();
    }
    return view('user-auth.view_matching');
  }
  
  public function view_booster(Request $request)
  {
    if ($request->ajax()) {
      $user = Session::get('user');
      $userreferral = DB::table("registration")
        ->join('booster_income', 'booster_income.user_id', '=', 'registration.id')
        ->select('registration.userid', 'booster_income.user_id', 'booster_income.income','booster_income.status','booster_income.created_at')
        ->where('registration.id', $user['id'])
        ->where('booster_income.status', 1)
        ->get();

      return DataTables::of($userreferral)
        ->addIndexColumn()
        ->toJson();
    }
    return view('user-auth.view_booster');
  }


}