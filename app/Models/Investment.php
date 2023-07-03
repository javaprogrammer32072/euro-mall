<?php

namespace App\Models;
use App\Models\Registration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Investment extends Model
{
    use HasFactory;
    public $table = "investment";


    public static function investment()
    {
        $user = Session::get('user');
        $userreferral = Registration::where('userid', $user['userid'])->first();
        $data = Investment::where('user_id', $userreferral->userid)
            ->get();
        return $totalAmount = $data->sum('amount');
    }
}
