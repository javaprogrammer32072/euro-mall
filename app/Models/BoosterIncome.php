<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Session;

use Illuminate\Database\Eloquent\Model;

class BoosterIncome extends Model

{

    use HasFactory;

    public $table = "booster_income";

    public $timestamps=false;


    public static function booster_income()
    {
        $user = Session::get('user');
        $userreferral = Registration::where('id', $user['id'])->first();
        $data = BoosterIncome::where("user_id", '=', $userreferral->id)->where('status', '=', 1)->get();
        return $totalAmount = $data->sum('income');
    }

    
    public static function admin_booster_income()
    {
        $data = BoosterIncome::where('status', '=', 1)->get();
        return $totalAmount = $data->sum('income');
    }

}
