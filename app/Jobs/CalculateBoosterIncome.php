<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Investment;
use App\Models\Registration;
use App\Models\ROI;
use App\Models\Matching;
use App\Models\BoosterIncome;
use DB;
use Carbon\Carbon;


class CalculateBoosterIncome implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    
    public $code =0;
    public function __construct($ref_code)
    {
        $this->code = $ref_code;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $referral_code = $this->code;
        // Step 1: Get Parent User using Referral Code 
        $p_user = Registration::where("referral_left", '=', $referral_code)->orWhere("referral_right", '=', $referral_code)
            ->select('id', 'userid', 'referral_right', 'referral_left', "first_name")->first();


        // Step 2: Get all child users using direct referral code. 
        $child_user = Registration::join("investment", 'investment.user_id', '=', "registration.id")->where("investment.status", '=', 1)
            ->where("referral_code", '=', $p_user->referral_left)->orWhere("referral_code", '=', $p_user->referral_right)
            ->select('registration.id', "first_name", "investment.amount", "investment.created_at")->get();

        //Step 3: Get child user one by one
        $one_day_direct = 0;
        $five_day_direct = 0;
        foreach ($child_user as $key => $c_user) {
            $diff = now()->diffInDays(Carbon::parse($c_user->created_at));
            if ($diff <= 1)
                $one_day_direct++;
            if ($diff <= 5)
                $five_day_direct++;
        }
        // Step 4: Check Condidition 24 Hours means one day 
        if ($one_day_direct >= 2) {
            $u = Registration::find($p_user->id);
            $u->roi = 2;
            $u->save();
        }
        // Step 4: Check Condidition 5 days 7 referral
        if ($five_day_direct >= 7) {
            $inv = Investment::where("user_id", '=', $p_user->id)->where("status", '=', 1)->sum("amount");
            $u = Registration::find($p_user->id);
            $u->roi = 2;
            $u->save();

            $b = new BoosterIncome();
            $b->user_id = $p_user->id;
            $b->income = $inv;
            $b->save();
        }
        echo "SUCCESS";
    }
}