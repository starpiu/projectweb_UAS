<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santri.id</title>
</head>
<body>
    <h4>Ubah Data</h4>
    <form method="POST" action="/beranda/{{$santri->id}}/edit">
        {{-- {{ route('reservation.update', ['reservation' => $data->id]) }} --}}
        @csrf
        @method('put')
        <div>
            <label for="id">Id Yayasan</label>
            <input type="number" name='idyayasan' id="idyayasan" value="{{$santri->id_yayasan}}">
            {{-- <input id="title" name="title" value="{{ $task->title }}"> --}}
        </div>
        <div>
            <label for="nama">Nama</label>
            <input type="text" name='nama' id="nama" value="{{$santri->nama}}">
            {{-- <label for="description">Deskripsi</label>
            <textarea id="description" name="description">{{ $task->description }}</textarea> --}}
        </div>
        <div>
            <label for="kamar">Kamar</label>
            <input type="text" name='kamar' id="kamar" value="{{$santri->kamar}}">
        </div>
        <div>
            <label for="sekolah">Sekolah</label>
            <input type="text" name='sekolah' id="sekolah" value="{{$santri->sekolah}}">
        </div>
        <div>
            <button type="submit">save changes</button>
        </div>
    </form>
</body>
</html>