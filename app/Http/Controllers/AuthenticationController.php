<?php

namespace App\Http\Controllers;

use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Redirector;
use function Laravel\Prompts\alert;

class AuthenticationController extends Controller
{
    public function DirectToRegister(){
        return view('register');
    }
    public function ShowLogin(){
        return view('login');
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
     public function index(Request $request){

          User::create([
              'name'=> $request->name,
              'email'=>$request->email,
              'gender'=>$request->gender,
              'password'=>Hash::make($request->password),
              'phone'=>$request->phone]);
       return view('login');
}
   public function login(Request $request){
//        dd('mm');
       if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
//           dd('dina');
           return redirect()->route('home');
       } else {
           Toastr::error('your credentials are wrong, please check them', 'Error');
           return redirect()->back();
       }

   }
}
