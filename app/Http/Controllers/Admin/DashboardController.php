<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Models\Registration;
use App\Models\My_team;
use App\Models\My_referral;
use App\Models\Investment;
use App\Models\Withdraw;
use App\Models\ROI;
use App\Models\Matching;
use App\Models\BoosterIncome;
use DB;
use Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function index()
    {
         $ROI = ROI::admin_total_roi_report();
        $Investment = Investment::admin_investment_report();
        $My_team = My_team::admin_my_team_report();
        $My_referral = My_referral::admin_my_referral_report();
        $withdraw = Withdraw::admin_withdraw_report(); // Get the data from the withdraw model  
        $Matching = Matching::admin_total_Matching_report(); 
        $booster_income = BoosterIncome::admin_booster_income(); 
        return view('Admin.dashboard',compact("withdraw","My_referral","My_team","Investment","ROI","Matching","booster_income"));
    }

    public function investments(Request $request)
  {
    if ($request->ajax()) {
      $user = Session::get('user');
      $userreferral = DB::table("registration")
        ->join('investment', 'investment.user_id', '=', 'registration.id')
        ->select('registration.userid', 'investment.amount', 'investment.status', 'investment.created_at')
        ->where('investment.status', 1) 
        ->get();

      return DataTables::of($userreferral)
        ->addIndexColumn()
        ->toJson();
    }
    return view('Admin.investment');
  }

 public function withdraws(Request $request)
  {
    if ($request->ajax()) {
      $data = DB::table('withdraw')
        ->select('user_id', 'amount', 'trans_charge', 'remarks', 'status', 'created_at')
        ->get();
      return DataTables::of($data)
        ->addIndexColumn()
        ->toJson();
    }
    return view('Admin.withdraw');
  }

    public function my_referrals(Request $request)
  {
    if ($request->ajax()) {
      // Retrieve the necessary data for the DataTable
     $data = Registration::select('userid', 'first_name', 'last_name', 'phone', 'status', 'position')
            ->get();

      return DataTables::of($data)
        ->addIndexColumn()
        ->toJson();
    }

    return view('Admin.my-referral');
  }
  public function my_teams(Request $request)
  {
    if ($request->ajax()) {
        
        $data = Registration::get();

      return DataTables::of($data)
        ->addIndexColumn()
        ->toJson();
    }
    return view('Admin.my-team');
  }


  public function view_rois(Request $request)
    {
    if ($request->ajax()) {
        $userreferral = DB::table("registration")
        ->join('roi', 'roi.user_id', '=', 'registration.id')
        ->select('registration.userid', 'roi.amount_per_day', 'roi.created_at')
        ->get();

        return DataTables::of($userreferral)
        ->addIndexColumn()
        ->toJson();
    }
    return view('Admin.roi');
    }

    public function view_matchings(Request $request)
{
    if ($request->ajax()) {
        // $user = Session::get('user');
        $userreferral = DB::table("registration")
            ->join('matching', 'matching.user_id', '=', 'registration.id')
            ->select('registration.userid', 'matching.user_id', 'matching.left_buss', 'matching.right_buss', 'matching.amount', 'matching.carry_amount', 'matching.flush_amt', 'matching.carry_side', 'matching.created_at')
            // ->where('registration.id', $user['id'])
            ->where('matching.status', 1) // Add this line to filter by status
            ->get();

        return DataTables::of($userreferral)
            ->addIndexColumn()
            ->toJson();
    }
    return view('Admin.view_matching');
}

public function view_adminbooster(Request $request)
  {
    if ($request->ajax()) {
      $user = Session::get('user');
      $userreferral = DB::table("registration")
        ->join('booster_income', 'booster_income.user_id', '=', 'registration.id')
        ->select('registration.userid', 'booster_income.user_id', 'booster_income.income','booster_income.status','booster_income.created_at')
        ->where('booster_income.status', 1)
        ->get();

      return DataTables::of($userreferral)
        ->addIndexColumn()
        ->toJson();
    }
    return view('Admin.view_booster');
  }


}
