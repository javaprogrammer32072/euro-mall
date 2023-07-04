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
        return view('Admin.dashboard',compact("withdraw","My_referral","My_team","Investment","ROI","Matching"));
    }
}
