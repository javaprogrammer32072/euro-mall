<?php

namespace App\Models;
use App\Models\Registration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Withdraw extends Model
{
    use HasFactory;
    public $table = "withdraw";

    protected $fillable = [
        'amount', 'remarks','user_id'
    ];

    public static function withdraw(){
        $user = Session::get('user');
        $userreferral = Registration::where('userid', $user['userid'])->first();
        $data = Withdraw::where('user_id', $userreferral->userid)->get();
        return  $data->sum('amount');
    }
}
