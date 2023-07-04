<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use App\Models\Registration;
use App\Models\Investment;
use Carbon\Carbon;

use DB;

class Matching extends Model
{
  use HasFactory;
  public $table = "matching";

  /* This Function Return Left Children Investment Total Amount given by User ID */
  public static function getLeftChildAmount($user_id)
  {
    $left_users = Registration::whereRaw("FIND_IN_SET('$user_id',left_parent)")->select('id')->get();
    $total = 0;
    foreach ($left_users as $key => $user) {
      $total = $total + Investment::where("user_id", '=', $user->id)->where('status', '=', 1)->sum("amount");
    }
    return $total;
  }

  /* This Function Return Left Children Investment Total Amount given by User ID */
  public static function getRightChildAmount($user_id)
  {
    $right_users = Registration::whereRaw("FIND_IN_SET('$user_id',right_parent)")->select('id')->get();
    $total = 0;
    foreach ($right_users as $key => $user) {
      $total = $total + Investment::where("user_id", '=', $user->id)->where('status', '=', 1)->sum("amount");
    }
    return $total;
  }

  /* This Function Return Yesterday Left Business & Left Carry Amount based on User ID */
  public static function yesterdayLeftBuss($user_id)
  {
    $data['left_buss'] = Matching::where('user_id', '=', $user_id)->whereDate("created_at", Carbon::parse(" -1 days"))->sum("left_buss");
    $data['carry_amt'] = Matching::where('user_id', '=', $user_id)->where("carry_side", '=', "LEFT")->whereDate("created_at", Carbon::parse(" -1 days"))->sum("carry_amount");
    return $data;
  }

  /* This Function Return Yesterday Right Business & Left Carry Amount based on User ID */
  public static function yesterdayRightBuss($user_id)
  {
    $data['right_buss'] = Matching::where('user_id', '=', $user_id)->whereDate("created_at", Carbon::parse(" -1 days"))->sum("right_buss");
    $data['carry_amt'] = Matching::where('user_id', '=', $user_id)->where("carry_side", '=', "RIGHT")->whereDate("created_at", Carbon::parse(" -1 days"))->sum("carry_amount");
    return $data;
  }

  public static function total_Matching()
  {
      $user = Session::get('user');
      $userreferral = Registration::where('id', $user['id'])->first();
      $data = Matching::where('user_id', $userreferral->id)
          ->get();
      return $totalAmount = $data->sum('amount');
  }


  public static function admin_total_Matching_report()
  {
      $data = Matching::get();
      return $totalAmount = $data->sum('amount');
  }


}