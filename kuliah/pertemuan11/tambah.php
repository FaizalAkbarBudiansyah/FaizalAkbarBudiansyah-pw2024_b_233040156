<?php

require 'functions.php';

// Cek apakah tombol tambah sudah di klik
if (isset($_POST['tambah'])) {

    // Cek apakah data berhasil ditambahkan
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
    </script>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <h1>Tambah Data Mahasiswa</h1>

        <form action="" method='POST'>
            <div class="mb-3">
                <label for="ama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name='nama' required>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">Nim</label>
                <input type="text" class="form-control" id="nim" name='nim' required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name='email' required>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jususan</label>
                <input type="text" class="form-control" id="jurusan" name='jurusan' required>
            </div>

            <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     
</body>

</html>