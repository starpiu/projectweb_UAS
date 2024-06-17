<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/beranda',[BerandaController::class,'index']);
Route::get('/beranda/form',[FormController::class,'create']);
Route::post('/beranda',[FormController::class,'store']);