<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('login.login');
    }
    function login(Request $request) //menerima parameter atau isi form pada function create
    {
        $request->validate([ //proses validasi data
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ], [
            'email.required'=>'wajib diisi', //email dan pass ketika kosong maka muncul tulisan wajib diisi
            'password.required'=>'wajib diisi'
        ]);
        $infologin =[ //membuat variabel baru berupa infologin yang menyimpan data email dan pass
            'email'=> $request-> email,
            'password'=> $request-> password,
        ];
        if(Auth::attempt($infologin)){
            return redirect('/beranda');
        }//jika authentikasi sukses
    }
}
