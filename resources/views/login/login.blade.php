<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Santri.id</title>
    <link href="\css\model.css" rel="stylesheet" >
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="form">
    <form method="POST" action="/login"> 
<h1>Login</h1> 
    <h5>silahkan isi form dibawah ini</h5>
        @csrf
        <div>
            <input type="text" id="email" name="email" placeholder="email" required>
            <box-icon name='envelope' type='solid' ></box-icon>
        </div>
        <div>
            <input type="password" id="password" name="password" placeholder="password" required>
            <box-icon name='lock-alt' type='solid' ></box-icon>
        </div>
        <div>
            <button type="submit">Masuk</button>
        </div>
    </form>
    </div>
</body>
</html>
</body>
</html>