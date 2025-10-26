<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\VerificationCode;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function ForgotPassword(){

        return view('forgotPassword');

    }
    public function SendVerificationCode(Request $request){

//           dd($request);
        $request->validate([ 'email'=> 'required|email']);
        set_time_limit(-1);
        $user=User::where('email',$request->email)->first();
        if(!$user){
            return back()->withErrors(['email'=>'Email address is not found']);
        }

//        dd($user);

        // to generate random number of 6 digits
        $verification_code = random_int(100000,999999);
//        dd($verification_code);
//        $verification_code = 654321;

        VerificationCode::create([
            'code'=> $verification_code,
            'user_id'=> $user->id,
            'expired_at'=> now()->addMinutes(15), // code is valid for 15 minutes
        ]);

        //store email in session storage
        session(['email' => $user->email]);

        Mail::to($request->email)->send( new ForgotPasswordCodeMail($user , $verification_code));
        return view('verifyPasswordCode');

    }
    public function verify(Request $request){

        $request->validate([
            'code'=> 'required|array|size:6',
            'code.*'=> 'required|digits:1'
        ]);

        $entered_code = implode('',$request->input('code'));
        $user_email = $request->session()->get('email');
        $user_id=User::where('email',$user_email)->pluck('id')->first();

        $is_exist = VerificationCode::where('code','=',$entered_code)
            ->where('user_id', $user_id)
//            ->where('expired_at','>',Carbon::now())
            ->orderBy('created_at','desc')
            ->first();



        $expired_at= $is_exist ? $is_exist->expired_at : null;
        $is_expired = $is_exist && ($expired_at && $expired_at >= Carbon::now()) ? false : true ;

        if($is_exist){
            if($is_expired){
                return view('verifyPasswordCode', ['error' => 'Verification Code expired']);
            }else{
                if($entered_code==$is_exist->code){
                    return view('resetPassword');
                }else{
                    return view('verifyPasswordCode', ['error' => 'Invalid Code']);
                }
            }
        }else{
            return view('verifyPasswordCode', ['error' => ' This code does not exist']);
        }
//        dd($last_code);
        //check for expiration
//        if($entered_code) {
//            dd('in if');
//            $yours = $last_code->code;
//        }else{
//            dd('in else');
//            return back()->withErrors(['error'=> 'Verification Code expired']);
//        }
//
//        if ($is_exist){
//            $yours = $is_exist->code;
//            if($entered_code != $yours){
//                return view('verifyPasswordCode', ['error' => 'Invalid Code']);
//            }else{
//                return view('resetPassword');
//            }
//        }else{
//
//        }


        // check for correctness of code

//        if($entered_code != $yours){
//            dd('in invalid' );
//           return back()->withErrors(['error'=>'Invalid Code']);
//            return redirect('/verify')->withErrors(['error'=>'Invalid Code']);
//            return view('verifyPasswordCode', ['error' => 'Invalid Code']);
//
//        }
    }

    public function ResetPassword( Request $request){
        $request->validate([
            'password'=> 'required|min:8',
            'Cpassword'=>'required|min:8'
        ]);

        if($request->password != $request->Cpassword){
            return view('resetPassword',['error','password and confirm password do not match']);
        }
        $user_email= $request->session()->get('email');
        $user= User::where('email',$user_email)->first();
        if($user){
            $new_password = bcrypt($request->input('password'));
        }
        User::query()->where('id',$user->id)->update(['password'=>$new_password]);

        return redirect()->route('login');
    }
}
