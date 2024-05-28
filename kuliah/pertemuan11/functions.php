<?php
function koneksi()
{
    $db = mysqli_connect('localhost', 'root', '', 'pw2024_b_233040156') or die('Koneksi ke DB Gagal!');
    return $db;
}

function query($sql)
{
    // Koneksi ke Database
    $conn = koneksi();

    // Lakukan Query ke Table Mahasiswa
    $result = mysqli_query($conn, $sql) or die('mysqli_error($conn)');
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);

    $sql = "INSERT INTO mahasiswa
                VALUES(null, '$nama', '$nim', '$email', '$jurusan')
            ";

    mysqli_query($conn, $sql) or die(mysqli_error($conn));

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}

function hapus($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $nim = htmlspecialchars($data['nim']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']);

    $sql = "DELETE INTO mahasiswa
                VALUES(null, '$nama', '$nim', '$email', '$jurusan')
            ";

    mysqli_query($conn, $sql) or die(mysqli_error($conn));

    mysqli_query($conn, $sql);

    return mysqli_affected_rows($conn);
}
