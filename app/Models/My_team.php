<?php

namespace App\Models;
use App\Models\Registration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class My_team extends Model
{
    use HasFactory;
    public $table = "registration";

    public static function my_team()
    {
        $user = Session::get('user');
        $userReferral = Registration::where('userid', $user['userid'])->first();
        $searchValue = $userReferral['id'];
        $data = Registration::select('userid', 'first_name', 'last_name', 'phone', 'status', 'position')
            ->whereRaw('FIND_IN_SET("' . $searchValue . '", parent_id)')
            ->get();

        return $totalRecords = count($data);
    }

     public static function admin_my_team_report()
    {
        
        $data = Registration::get();

        return $totalRecords = count($data);
    }

}
