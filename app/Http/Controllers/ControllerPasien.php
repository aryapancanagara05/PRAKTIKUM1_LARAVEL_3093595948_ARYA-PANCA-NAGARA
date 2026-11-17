<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

class ControllerPasien extends Controller
{
    public function Masuk(){
        return view('login');
    }

    public function Daftar(){
        return view('register');
    }
}
