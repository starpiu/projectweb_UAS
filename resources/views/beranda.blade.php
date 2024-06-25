<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>santri.id</title>
   <link href="\css\beranda.css" rel="stylesheet" >
    
</head>
<body>
    
    <!-- START DATA -->
<div >
      
    <!-- FORM PENCARIAN -->
    <div> 
      <form class="form">
         <h1>Data Santri</h1>
    <div>
    <!-- TOMBOL TAMBAH DATA -->
    
    <div>
      <button class="aksi-tambah"><a class="aksi-tambah" href='beranda/form'>Tambah Data</a></button>
      <button class="aksi-logout"><a class="aksi-logout" href="/logout">Logout</a></button> 
    </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Id Yayasan</th>
                <th class="nama">Nama</th>
                <th>Kamar</th>
                <th>Sekolah</th>
                <th class="tombol"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $santri)
            <tr>
                <td>{{$santri->id}}</td>
                <td>{{$santri->id_yayasan}}</td>
                <td class="nama">{{$santri->nama}}</td>
                <td>{{$santri->kamar}}</td>
                <td>{{$santri->sekolah}}</td>
                <td>
                    {{-- <button><a href='beranda/{{$santri->id}}/edit'>Edit</a></button> --}}
                    <form action="beranda/{{$santri->id}}/edit" method="GET">
                        @csrf
                        @method('GET')
                        <button class="aksi-edit" type="sumbit" name="submit">Edit</button>
                    </form>
                    <form onsubmit="return confirm('yakinkah anda mau menghapus data ini?')" action="beranda/{{$santri->id}}/delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="aksi-hapus" type="sumbit" name="submit">Hapus</button>
                    </form>
                    {{-- <a href='beranda/{{$santri->id}}/delete'>Hapus</a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>