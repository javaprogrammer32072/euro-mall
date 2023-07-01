<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
    else {
      echo "Excid userid: " . $user_id;
      return false;
    }

  }
}