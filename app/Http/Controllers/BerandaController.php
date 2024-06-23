<?php

namespace App\Http\Controllers;

use App\Models\santri;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    function index()
    {
        $data = santri::all();
        return view('beranda',['data' => $data]);
    }
    
}
