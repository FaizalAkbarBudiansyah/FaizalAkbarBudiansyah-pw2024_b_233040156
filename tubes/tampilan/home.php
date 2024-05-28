<?php
// Koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040156");

// Ambil Data Album
$result = mysqli_query($conn, "SELECT * FROM album");

// Ambil Data (FETCH) Mahasiswa dari Objek result
// mysqli_fetch_row() // Mengembalikan Array Numerik
// mysqli_fetch_assoc() // Mengembalikan Array Associative
// mysqli_fetch_array() // Mengembalikan Keduanya
// mysqli_fetch_object()

// while ($album = mysqli_fetch_row($result)) {
//     var_dump($album);
// {} <?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KPOP ALBUM</title>
</head>

<body>


    <h1 style="text-align: center;">ALBUM ARTIST</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Artist</th>
            <th>Album</th>
            <th>Title Track</th>
            <th>Year</th>
            <th>Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $row["id"]; ?></td>
                <td><?= $row["artist"]; ?></td>
                <td>
                    <img src="img/<?= $row["album"]; ?>" alt="firstminialbum" width="100px" style="display: block; margin: 0 auto;">
                    <p style="text-align: center;"><?= $row["name"]; ?></p>
                </td>
                <td><?= $row["title track"]; ?></td>
                <td><?= $row["year"]; ?></td>
                <td>
                    <a href="">change</a>
                    <a href="">delete</a>
                </td>
            </tr>
        <?php endwhile; ?>

    </table>


</body>

</html>