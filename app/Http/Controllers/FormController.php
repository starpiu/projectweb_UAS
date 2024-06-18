<?php

namespace App\Http\Controllers;

use App\Models\santri;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    function create()
    {
        return view('form.create');
    }
    function store(Request $request)
    {
     $data = [
        'Id_Yayasan' => $request->idyayasan,
        'Nama' => $request->nama,
        'Kamar' => $request->kamar,
        'Sekolah' => $request->sekolah,
     ];
     santri::create($data);
     return view('beranda');   
    }
}
