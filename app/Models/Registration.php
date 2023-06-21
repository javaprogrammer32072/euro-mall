<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hash;

class Registration extends Model
{
    use HasFactory;
    public $table = "registration";

    // Create a new user function 
    public static function createUser($req){
        $user = new Registration();
        $user->first_name = $req['fname'];
        $user->last_name = $req['lname'];
        $user->email = $req['email'];
        $user->phone = $req['phone'];
        $user->referral_code = $req['referral_code'];
        $user->password = Hash::make($req['password']);
        $user->save();

        // Now Save Extra Information Behalf of This User 
        $p_user = Registration::where("referral_left",'=',$req['referral_code'])->orWhere("referral_right",'=',$req['referral_code'])->first();
        $pos = '';
        $parent_id = $p_user->parent_id.",".$p_user->id;
        $left_parent = $p_user->left_parent;
        $right_parent =$p_user->right_parent;
        $left_referral = $user->id.substr(uniqid(),5)."L";
        $right_referral = $user->id.substr(uniqid(),5)."R";

        // Check Referral code giver user referral code is left referral code or left referral code 
        if($p_user->referral_right==$req['referral_code'])
        {
            $pos = "RIGHT";
            $right_parent = $right_parent.",".$p_user->id;
        }
        else
        {
            $pos = "LEFT";
            $left_parent = $left_parent.",".$p_user->id;
        }
        // Now Save User Information 
        $u = Registration::find($user->id);
        $u->parent_id = $parent_id;
        $u->position = $pos;
        $u->left_parent = $left_parent;
        $u->right_parent = $right_parent;
        $u->referral_left = strtoupper($left_referral);
        $u->referral_right = strtoupper($right_referral);
        $u->save();
        return true;
    }

    public static function editprofile($req)
    {
        $user = new Registration(); // Instantiate the Registration class
        $user->userid = $req['user_id'];
        $edit_array = array(
            'first_name' => $req['fname'],
            'last_name' => $req['lname'],
            'email' => $req['email'],
            'phone' => $req['phone'],
            'updated_at' => now()
        );   
    
        $res = Registration::where('userid', $user->userid);
        $data = $res->update($edit_array);
        return true;
    }



    public static function sendmail()
    {
        $otp = mt_rand(1000, 9999);
        $expire_time = now();
        $res = Registration::where('userid', $res->id)->update(['otp' => $otp,'expire_time' => $expire_time]);
        
    }
}