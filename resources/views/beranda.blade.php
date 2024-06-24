<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>santri.id</title>
    <link href="\css\model.css" rel="stylesheet" >
</head>
<body>
    <h1>Data Santri</h1>
    <div>
      <a href="/logout">Logout</a>   
    </div>
    <!-- START DATA -->
<div >
    <!-- FORM PENCARIAN -->
    <div> 
      <form>
          <input type="search" name="katakunci" placeholder="Masukkan kata kunci" aria-label="Search">
          <button type="submit">Cari</button>
      </form>
    </div>
   
    <!-- TOMBOL TAMBAH DATA -->
    
    <div>
      <a href='beranda/form'>+ Tambah Data</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Id Yayasan</th>
                <th>Nama</th>
                <th>Kamar</th>
                <th>Sekolah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $santri)
            <tr>
                <td>{{$santri->id}}</td>
                <td>{{$santri->id_yayasan}}</td>
                <td>{{$santri->nama}}</td>
                <td>{{$santri->kamar}}</td>
                <td>{{$santri->sekolah}}</td>
                <td>
                    <a href='beranda/{{$santri->id}}/edit'>Edit</a>
                    <form onsubmit="return confirm('yakinkah anda mau menghapus data ini?')" action="beranda/{{$santri->id}}/delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="sumbit" name="submit">Hapus</button>
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