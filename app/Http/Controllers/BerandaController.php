<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    function index()
    {
        return view('beranda');
    }
    
}
