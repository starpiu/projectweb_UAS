<?php

namespace App\Http\Controllers;

use App\Models\Santri;
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
        'id_yayasan' => $request->idyayasan,
        'nama' => $request->nama,
        'kamar' => $request->kamar,
        'sekolah' => $request->sekolah,
     ];
     Santri::create($data);
     return redirect('beranda') ;
    }
}
