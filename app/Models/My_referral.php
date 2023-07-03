<?php

namespace App\Models;
use App\Models\Registration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class My_referral extends Model
{
    use HasFactory;

    public $table = "registration";

    public static function my_referral(){
        $user = Session::get('user');
        $userreferral = Registration::where('userid', $user['userid'])->first();
        $data = Registration::select('userid', 'first_name', 'last_name', 'phone', 'status', 'position')
            ->orWhere('referral_code', $userreferral['referral_right'])
            ->orWhere('referral_code', $userreferral['referral_left'])
            ->get();
       return $totalRecords = count($data);
    }
}
