<?php

function hitungLuasLingkaran($r)
{
    echo "Jari-jari lingkaran: $r cm <br>";
    $luas = 3.14 * $r * $r;
    echo "Luas lingkaran: $luas cm<sup>2</sup> <br>";
}

function hitungKelilingLingkaran($r)
{
    echo "Jari-jari lingkaran: $r cm <br>";
    $keliling = 2 * 3.14 * $r;
    echo "Keliling lingkaran: $keliling cm <br>";
}

echo "<h4>Menghitung Luas Lingkaran</h4>";
hitungLuasLingkaran(10);
echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
hitungKelilingLingkaran(20);
