<?php

namespace App\Models;
<<<<<<<<< Temporary merge branch 1
use App\Models\Registration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
=========

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
>>>>>>>>> Temporary merge branch 2

class Investment extends Model
{
    use HasFactory;
    public $table = "investment";
<<<<<<<<< Temporary merge branch 1


    public static function investment()
    {
        $user = Session::get('user');
        $userreferral = Registration::where('userid', $user['userid'])->first();
        $data = Investment::where('user_id', $userreferral->userid)
            ->get();
        return $totalAmount = $data->sum('amount');
    }
=========
>>>>>>>>> Temporary merge branch 2
}
