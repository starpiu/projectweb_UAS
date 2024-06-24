<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <h1>Login Form</h1> 
    <h5>silahkan isi form dibawah ini</h5>
    <form method="POST" action="/login"> 
        @csrf
        <fieldset>
        <div>
            <label for="email">email :</label>
            <input type="text" id="email" name="email">
        </div>
        <div>
            <label for="password">password :</label>
            <input type="password" id="password" name="password">
        </div>
        </fieldset>
        <div>
            <button type="submit">Masuk</button>
        </div>
    </form>
</body>
</html>
</body>
</html>