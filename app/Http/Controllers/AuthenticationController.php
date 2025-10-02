<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function DirectToRegister(){
        return view('register');
    }
    public function ShowLogin(){
        return view('login');
    }
}
