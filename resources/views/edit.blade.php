<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santri.id</title>
    <link href="\css\create&edit.css" rel="stylesheet" >
</head>
<body>
    
    <form class="form" method="POST" action="/beranda/{{$santri->id}}/edit">
        {{-- {{ route('reservation.update', ['reservation' => $data->id]) }} --}}
        @csrf
        @method('put')
        <h2>Ubah Data</h2>
        <div class="input-box">
            <input type="number" name='idyayasan' id="idyayasan" value="{{$santri->id_yayasan}}" placeholder="Id Yayasan">
            {{-- <input id="title" name="title" value="{{ $task->title }}"> --}}
        </div>
        <div class="input-box">
            <input type="text" name='nama' id="nama" value="{{$santri->nama}}" placeholder="Nama">
            {{-- <label for="description">Deskripsi</label>
            <textarea id="description" name="description">{{ $task->description }}</textarea> --}}
        </div>
        <div class="input-box">
            <input type="text" name='kamar' id="kamar" value="{{$santri->kamar}}" placeholder="Kamar">
        </div>
        <div class="input-box">
            <input type="text" name='sekolah' id="sekolah" value="{{$santri->sekolah}}" placeholder="Sekolah">
        </div>
        <div class="tambah">
            <button class="aksi-tambah" type="submit">save changes</button>
        </div>
    </form>
</body>
</html>