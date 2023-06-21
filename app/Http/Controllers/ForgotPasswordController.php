<?php 
  
namespace App\Http\Controllers; 
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use DB; 
use Carbon\Carbon; 
use App\Models\User; 
use App\Models\Registration; 
use Mail; 
use Hash;
use Illuminate\Support\Str;
  
class ForgotPasswordController extends Controller
{
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function showForgetPasswordForm()
      {
         return view('forgetpassword.forgetPassword');
      }
  
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitForgetPasswordForm(Request $request)
      {
          $request->validate([
              'email' => 'required|email|exists:registration',
          ]);
  
          $token = Str::random(64);
            
          DB::table('password_resets')->insert([
              'email' => $request->email, 
              'token' => $token, 
              'created_at' => Carbon::now()
            ]);
  
          Mail::send('emails.forgetPassword', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Reset Password');
          });
  
          return back()->with('success', 'We have e-mailed your password reset link!');
      }
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function showResetPasswordForm($token) { 
         return view('forgetpassword.forgetPasswordLink', ['token' => $token]);
      }
  
      /**
       * Write code on Method
       *
       * @return response()
       */
        public function submitResetPasswordForm(Request $request)
        {
            $request->validate([
                'email' => 'required|email|exists:registration',
                'password' => 'required|string|min:8|confirmed',
                'password_confirmation' => 'required'
            ]);
    
            $updatePassword = DB::table('password_resets')->where(['email' => $request->email, 'token' => $request->token ]) ->first();
            $data =  DB::table('password_resets')->where('email', $request->email)->first();
            $date = Carbon::parse($data->created_at);
            $now = Carbon::now();

            $timeDifference = $now->diffInMinutes($date);

            if ($timeDifference > 10) {
                DB::table('password_resets')->where(['email'=> $request->email])->delete();
                return back()->withInput()->with('error', 'Link Has Been Expired!');
            } else 
            {
                // Proceed with the code here
                if(!$updatePassword){
                    return back()->withInput()->with('error', 'Invalid token!');
                }
        
                $user = Registration::where('email', $request->email)
                    ->update(['password' => Hash::make($request->password)]);
        
                DB::table('password_resets')->where(['email'=> $request->email])->delete();
        
                return redirect('/signin')->with('success', 'Your password has been changed!');
            }
        }
}