<?php
$nama_depan = "Faizal Akbar";
$nama_belakang = "Budiansyah";
$nama_lengkap = "Faizal Akbar Budiansyah";

echo "Mulai <br>";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $nama_lengkap . "<br>";
    } elseif ($i % 3 == 0) {
        echo $nama_depan . "<br>";
    } elseif ($i % 5 == 0) {
        echo $nama_belakang . "<br>";
    } else {
        echo $i . "<br>";
    }
}

echo "Selesai <br>";
