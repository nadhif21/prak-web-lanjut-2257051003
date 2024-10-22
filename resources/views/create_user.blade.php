<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2</title>
    <link rel="stylesheet" href="/assets/css/cuser.css">
</head>
<body>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Nama:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NPM:</td>
                <td><input type="text" name="npm"></td>
            </tr>
            <tr>
                <td>Kelas:</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
</body>
</html>