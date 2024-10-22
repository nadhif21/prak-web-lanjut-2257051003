<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="/assets/css/cuser.css">
</head>
<body>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        @foreach($errors->get('nama') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach

        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm">
        @foreach($errors->get('npm') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach

        <label for="kelas">Kelas :</label>
        <select name="kelas_id" id="kelas_id">
            @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>

        <input type="submit" value="Submit">
    </form>
</body>
</html>