<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bonanza extends Model
{
    use HasFactory;
    protected $table = 'bonanza'; // Specify the table name if different from the model name
    
    protected $fillable = [
        'left_business',
        'right_business',
        'direct',
        'amount',
        'count',
        'price',
        'description',
        'no_of_direct_business',
    ];

   
    public static function view_bonanza()
    {
        $data = Bonanza::get();
        return $data;
    }


}
