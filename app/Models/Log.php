<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;
use Session;

class Log extends Model
{
    use HasFactory;
    public $timestamps = false;

    public static function createLog($user_id=0,$module,$request,$response)
    {
        if(!empty(Session::get('user')))
        {
            $user = Session::get('user');
            $user_id = $user['id'];
        }
        $log = new Log();
        $log->user_id = $user_id;
        $log->method = Request::method();
        $log->source = Request::fullUrl();
        $log->ip = Request::ip();
        $log->agent = Request::header('user-agent');
        $log->module = $module;
        $log->request = $request;
        $log->response = $response;
        $log->save();
        return $log->id;
    }
    public static function updateLog($log_id,$response,$user_id=0)
    {
        $log = Log::find($log_id);
        $log->response = $response;
        if($user_id>0)
            $log->user_id = $user_id;
        $log->save();
        return $log->id;
    }
}
