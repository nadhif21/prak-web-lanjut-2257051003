<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Profile</title>
    <link rel="stylesheet" href="/assets/css/puser.css">
</head>
<body>

    <div class="card">
        <img src="{{ asset('../' . $user->foto) }}" alt="Avatar">
        
        <h1>Profil User</h1>

        <div class="info">
            <p class="label">Nama :</p>
            <p class="value">{{$user->nama }}</p> <!-- Proper width for name field -->
        </div>
        <div class="info">
            <p class="label">NPM    :</p>
            <p class="value">{{ $user->npm }}</p> <!-- Proper width for NPM -->
        </div>
        <div class="info">
            <p class="label">Kelas :</p>
            <p class="value">{{ $user->nama_kelas ?? 'Kelas Tidak Ditemukan' }}</p> <!-- Proper width for class -->
        </div>
    </div>
</body>
</html>
