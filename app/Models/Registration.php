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
  public static function createUser($req)
  {
    $user = new Registration();
    $user->first_name = $req['fname'];
    $user->last_name = $req['lname'];
    $user->email = $req['email'];
    $user->phone = $req['phone'];
    $user->referral_code = $req['referral_code'];
    $user->password = Hash::make($req['password']);
    $user->save();
    // Now Get Parent Details behalf of Referral Code.
    $p_user = Registration::where("referral_left", '=', $req['referral_code'])->orWhere("referral_right", '=', $req['referral_code'])->select("id", "referral_code", "parent_id", "left_parent", "right_parent", "referral_right", "referral_left")->first();
    $pos = '';
    // echo $p_user->referral_right."<br>".$req['referral_code'];
    // Check Referral code giver user referral code is left referral code or left referral code 
    if ($p_user->referral_right == $req['referral_code']) {
      // echo "Right Parent Register";
      // Now if user has already left child & right child then we retrive right lowest child data & assign to parent user because one user has only two branch left or right.
      $cp_user = Registration::whereRaw("FIND_IN_SET('$p_user->id',right_parent)")->where("position", '=', 'RIGHT')->select("id", "referral_code", "parent_id", "left_parent", "right_parent", "referral_right", "referral_left")->orderBy("id", "DESC")->first();
      if (!empty($cp_user)) {
        // Assign Parent User to Lowest child User 
        $p_user = $cp_user;
        // echo "Right Parent";
      }
      $right_parent = $p_user->right_parent;
      $pos = "RIGHT";
      $right_parent = $right_parent . "," . $p_user->id;
      $left_parent = $p_user->left_parent;
    } else {
      // echo "Left Parent Register";
      // Now if user has already left child & right child then we retrive left lowest child data & assign to parent user because one user has only two branch left or right.
      $cp_user = Registration::whereRaw("FIND_IN_SET('$p_user->id',left_parent)")->where("position", '=', 'LEFT')->select("id", "referral_code", "parent_id", "left_parent", "right_parent", "referral_right", "referral_left")->orderBy("id", "DESC")->first();
      if (!empty($cp_user)) {
        // Assign Parent User to Lowest child User 
        $p_user = $cp_user;
        // echo "Left Parent";
      }
      $left_parent = $p_user->left_parent;
      $pos = "LEFT";
      $left_parent = $left_parent . "," . $p_user->id;
      $right_parent = $p_user->right_parent;
    }
    // Assign Child Parent Data 
    $parent_id = $p_user->parent_id . "," . $p_user->id;
    $left_referral = $user->id . substr(uniqid(), 7) . "L";
    $right_referral = $user->id . substr(uniqid(), 7) . "R";
    $userid = "JC" . $user->id . substr(uniqid(), 9);

    // Now Save User Information 
    $u = Registration::find($user->id);
    $u->userid = strtoupper($userid);
    $u->parent_id = ltrim($parent_id, ',');
    $u->position = $pos;
    $u->left_parent = ltrim($left_parent, ',');
    $u->right_parent = ltrim($right_parent, ',');
    $u->referral_left = strtoupper($left_referral);
    $u->referral_right = strtoupper($right_referral);
    $u->save();

    return [
      'id' => $user->id,
      'email' => $user->email
    ];

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

  // Get User Details Function 
  public static function getUserDetails($userid)
  {
    return Registration::where("userid", '=', $userid)
      ->select("id", 'first_name', "last_name", "phone", "email", "userid", "referral_left", "referral_right", 'status')->first();
  }

}