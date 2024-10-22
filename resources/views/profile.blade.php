<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2</title>
    <link rel="stylesheet" href="/assets/css/puser.css">
</head>
<body>

    <div class="card">
        <img src="https://img.antaranews.com/cache/1200x800/2021/03/20/WhatsApp-Image-2021-03-20-at-08.53.45.jpeg.webp" alt="Avatar">
        
        <div class="info">
            <p class="label">Nama :</p>
            <p class="value"><?= $nama ?></p>
        </div>
        <div class="info">
            <p class="label">Kelas :</p>
            <p class="value"><?= $kelas ?></p>
        </div>
        <div class="info">
            <p class="label">NPM :</p>
            <p class="value"><?= $npm ?></p>
        </div>
    </div>

</body>
</html>
