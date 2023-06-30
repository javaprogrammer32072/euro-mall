<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
    use HasFactory;
    public $table = "withdraw";

    protected $fillable = [
        'amount', 'remarks','user_id'
    ];

    // public static function create_withdraw($req){

    // }


}
