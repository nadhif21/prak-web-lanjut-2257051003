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
        <img src="https://img.antaranews.com/cache/1200x800/2021/03/20/WhatsApp-Image-2021-03-20-at-08.53.45.jpeg.webp" alt="Avatar">
        
            <h1>Profil User</h1>
    
            <div class="info">
                <p class="label">Nama :</p>
                <p class="value">{{ $nama }}</p> <!-- Proper width for name field -->
            </div>
            <div class="info">
                <p class="label">NPM    :</p>
                <p class="value">{{ $npm }}</p> <!-- Proper width for NPM -->
            </div>
            <div class="info">
                <p class="label">Kelas :</p>
                <p class="value">{{ $nama_kelas ?? 'Kelas Tidak Ditemukan' }}</p> <!-- Proper width for class -->
            </div>
        </div>

</body>
</html>
