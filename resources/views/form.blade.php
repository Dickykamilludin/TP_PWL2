<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>From pengelolaan data</h1>
    <form action="{{route('create')}}" method="post">
        <label for="NPM">NPM</label> <br>
        <input type="text" name="NPM"><br>

        <label for="Nama">Nama</label><br>
        <input type="text"name="Nama"><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>