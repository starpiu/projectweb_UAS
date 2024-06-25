<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="\css\create&edit.css" rel="stylesheet" >
    <title>santri.id</title>
</head>
<body>
    <!-- START FORM -->
<form class="form" action='{{url('/beranda')}}' method='post'>
@csrf
<h2>Tambah Data</h2>
    <div>
        <div class="input-box" >
                <input type="number" name='idyayasan' id="idyayasan" placeholder="Id Yayasan">
        </div>
        <div class="input-box">
                <input type="text" name='nama' id="nama" placeholder="Nama">
        </div>
        <div class="input-box">
                <input type="text" name='kamar' id="kamar" placeholder="Kamar">
        </div>
        <div class="input-box">
                <input type="text" name='sekolah' id="sekolah" placeholder="Sekolah">
        </div>
            <div class="tambah"><button class="aksi-tambah" type="submit"name="submit">SIMPAN</button></div> 
    </div>
</form>
<!-- AKHIR FORM -->
</body>
</html>