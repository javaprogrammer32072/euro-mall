<?php

namespace App\Http\Controllers;

use App\Models\Investment;
use App\Models\Registration;
use App\Models\ROI;
use Illuminate\Http\Request;
use App\Models\Matching;
use DB;
use Carbon\Carbon;

class MatchingController extends Controller
{
  /* This Function Credit Matching Amount Daily */

  function todayMatching(Request $req)
  {

    $match_percentage = env("MATCHING_PER");
    $parent_id = env("PARENT_ID");
    $users = DB::table("registration")->select("id")->get();
    // Now Fire a loop and calculate Matching for All Users 
    foreach ($users as $key => $user) {
      $today_left_buss = Matching::getLeftChildAmount($user->id);
      $today_right_buss = Matching::getRightChildAmount($user->id);
      if ($today_left_buss > 0 && $today_right_buss > 0) {
        /* Mathing Left Formula = Today Left Business - Yesterday Left Business + Left Carry Amount = Left Matching Amount */
        $yes_left_buss = Matching::yesterdayLeftBuss($user->id);
        $yes_right_buss = Matching::yesterdayRightBuss($user->id);

        $matching_left = $today_left_buss - $yes_left_buss['left_buss'] + $yes_left_buss['carry_amt'];

        /*Matching Right Formula = Today Right Business - Yesterday Right Business + Right Carry Amount = Right Matching Amount */
        $matching_right = $today_right_buss - $yes_right_buss['right_buss'] + $yes_right_buss['carry_amt'];

        $matching_amt = $matching_left;
        $position = "LEFT";
        $carry_amt = 0;

        if ($matching_left < $matching_right) {
          //Left Matching Side
          $matching_amt = $matching_left;
          $position = "RIGHT";
          $carry_amt = $matching_right - $matching_left;
        } else if ($matching_left > $matching_right) {
          //Right Matching Side
          $matching_amt = $matching_right;
          $position = "LEFT";
          $carry_amt = $matching_left - $matching_right;
        }
        $match_per = $matching_amt * $match_percentage / 100;
        // Now Insert  Matching & also check if today data not inserted on matching with giver user id then insert data otherwise no
        $id = Matching::where('user_id', '=', $user->id)->whereDate("created_at", Carbon::today())->count();
        if (!$id) {
          // Here Check User is Active or Not 
          $status = Registration::where("status", '=', $user->id)->where('status', '=', 1)->count();
          if ($status > 0) {
            $flush_amt = 0;
            // Now Check Matching Amount less then investment amount 
            $investment = Investment::getUserInvestmentAmount($user->id);
            if ($match_per > $investment && $user->id!= $parent_id) {
              // Match:500.5 || Investment: 400
              //flush amt = 500.5 - 400 = 100.5
              //Match Amt = Matching Amt - Flush Amt = 500.5 - 100.5 = 400
              $flush_amt = $match_per - $investment;
              $match_per = $match_per - $flush_amt;
            }
            $match = new Matching();
            $match->user_id = $user->id;
            $match->left_buss = $today_left_buss;
            $match->right_buss = $today_right_buss;
            $match->amount = $match_per;
            $match->carry_amount = $carry_amt;
            $match->carry_side = $position;
            $match->flush_amt = $flush_amt;
            $match->save();
          }
        }
        // echo "<pre>";
        // echo $today_left_buss;
        // print_r($yes_left_buss);
        // echo $today_right_buss;
        // print_r($yes_right_buss);
        // echo "Matching Left: " . $matching_left . "<br>";
        // echo "Matching Right: " . $matching_right . "<br>";
        // echo "Matching Amt: " . $matching_amt . "<br>";
        // echo "Position: " . $position . "<br>";
        // echo "Carry Amt: " . $carry_amt . "<br>";
        // echo "Matching Per Amt: " . $match_per . "<br>";

      }
    }
    echo "SUCCESS";
  }

  /* This Function credit User ROI Income Daily */

  function todayROI(Request $req)
  {
    $roi_income_per = env("DAILY_ROI_INCOME_PER");
    $users = DB::table("registration")->select("id")->get();
    // Now Fire a loop and calculate Matching for All Users 
    foreach ($users as $key => $user) {
      $status = ROI::checkUserROIExcid($user->id);
      if ($status) {
        $count = ROI::where('user_id', '=', $user->id)->whereDate("created_at", Carbon::today())->count();
        if (!$count) {
          $inv = Investment::where("user_id", '=', $user->id)->where("status", '=', 1)->sum("amount");
          $package = DB::table("packages")->where("amount", '=', $inv)->first();
          if (!empty($package)) {
            $amount = $inv * $package->roi_per / 100;
            $roi = new ROI();
            $roi->user_id = $user->id;
            $roi->amount_per_day = $amount;
            $roi->save();
          }
        }
      }
    }
    echo "SUCCESS";
  }

}