<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>santri.id</title>
</head>
<body>
    <!-- START FORM -->
<form action='{{url('beranda')}}' method='post'>
@csrf
    <div>
        <div >
            <label for="id">Id Yayasan</label>
            <div>
                <input type="number" name='idyayasan' id="idyayasan">
            </div>
        </div>
        <div>
            <label for="nama">Nama</label>
            <div>
                <input type="text" name='nama' id="nama">
            </div>
        </div>
        <div>
            <label for="kamar">Kamar</label>
            <div>
                <input type="text" name='kamar' id="kamar">
            </div>
        </div>
        <div>
            <label for="sekolah">Sekolah</label>
            <div>
                <input type="text" name='sekolah' id="sekolah">
            </div>
        </div>
            <div><button type="submit"name="submit">SIMPAN</button></div> 
    </div>
</form>
<!-- AKHIR FORM -->
</body>
</html>