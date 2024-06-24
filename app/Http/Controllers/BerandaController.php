<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    function index()
    {
        $data = Santri::all();
        return view('beranda',['data' => $data]);
    }
    function edit (santri $santri)
    {
        // return 'HI' ;
        return view('edit', ['santri' => $santri]);
    }

    // /**
    //  * Update the specified resource in storage.
    //  */
    function update(Request $request, $id)
    {
        // $request->validate([
        //     'title' => 'required',
        // ]);
        $santri = [
            'id_yayasan' => $request->idyayasan,
            'nama' => $request->nama,
            'kamar' => $request->kamar,
            'sekolah' => $request->sekolah,
         ];
        Santri::where('id',$id)->update($santri);
        return redirect('beranda');
    }
    function destroy(Santri $santri)
    {
        $santri->delete();

        return redirect('/beranda');
    }
    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Task $task)
    // {
    //     $task->delete();

    //     return redirect('/tasks');
    // }
    // function edit(data $data)
    // {
    //     return view('tasks.edit', ['' => $data]);
    // }
    
}
