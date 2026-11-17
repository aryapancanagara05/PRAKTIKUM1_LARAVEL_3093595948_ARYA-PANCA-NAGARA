<?php

use App\Http\Controllers\ControllerPasien;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[ControllerPasien::class,'tampil']);
Route::post('/login',[ControllerPasien::class,'login']);

Route::get('/register',[ControllerPasien::class,'baru']);
Route::post('/register',[ControllerPasien::class,'daftar']);

Route::get('/dashboard',[ControllerPasien::class,'selamat_datang']);
Route::post('/dashboard',[ControllerPasien::class,'dashboard']);
