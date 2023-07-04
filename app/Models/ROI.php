<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use App\Models\Investment;

class ROI extends Model
{
  use HasFactory;
  public $table = "roi";

  public static function checkUserROIExcid($user_id)
  {
    $max_roi_per = env("ROI_MAX_MULTIPLY");
    $investment = Investment::where("user_id", '=', $user_id)->where("status", '=', 1)->sum("amount");
    $investment = $investment * $max_roi_per;
    $amount = ROI::where("user_id", '=', $user_id)->sum("amount_per_day");
    if ($investment > $amount)
      return true;
    else 
      return false;

  }

   public static function total_roi()
    {
        $user = Session::get('user');
        $userreferral = Registration::where('id', $user['id'])->first();
        $data = ROI::where('user_id', $userreferral->id)
            ->get();
        return $totalAmount = $data->sum('amount_per_day');
    }


     public static function admin_total_roi_report()
    {
        $data = ROI::get();
        return $totalAmount = $data->sum('amount_per_day');
    }
}