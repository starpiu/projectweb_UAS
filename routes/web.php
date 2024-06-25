<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/login',[LoginController::class,'index'])->name('login');

Route::get('/login',[LoginController::class,'awal'])->name('login');
Route::post('/login',[LoginController::class,'oke']);
Route::get('/logout', [LoginController::class, 'destroy'])->middleware('auth');

// Route::prefix('/beranda')->middleware('auth')->group(function() {
Route::get('/beranda',[BerandaController::class,'index']);
Route::get('/beranda/form',[FormController::class,'create']);
Route::post('/beranda',[FormController::class,'store']);

Route::get('beranda/{santri}/edit', [BerandaController::class, 'edit']);
Route::put('beranda/{santri}/edit', [BerandaController::class, 'update']);
Route::delete('beranda/{santri}/delete', [BerandaController::class, 'destroy']); //});