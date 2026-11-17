<?php

namespace App\Http\Controllers;

use App\Models\tb_pasien;
use Illuminate\Auth\Events\Login;
use Illuminate\Container\Attributes\Auth as AttributesAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ControllerPasien extends Controller
{
    public function tampil(){
        return view('login');
    }

    public function daftar(){
        return view('register');
    }

    
    public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $ambildata=$request->only('email','password');

        if(Auth::attempt($ambildata)){
            tb_pasien::find($ambildata);
            redirect('dashboard')->with('pesan','login berhasil');

        }else{
            redirect('')->with('pesan','login gagal');
        }
    }

    public function baru(Request $request){
        $request->validate([

        ]);
        tb_pasien::create($request->all());
        Redirect('register')->with('login berhasil');
    }
}
