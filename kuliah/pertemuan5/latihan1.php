<?php
// 1. Membuat Array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$mhs = ["Sandhika", 3.2, false];

// 2. Mencetak Array (1)
echo $hari[0];
echo "<br>";
echo $bulan[2];
echo "<br>";
echo $mhs[1];
echo "<hr>";

// cetak seluruh isi array
// var_dump() atau print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mhs);
echo "<br>";
print_r($mhs);
// digunakan untuk debugging

// 3. Manipulasi Array
// Menambah isi array
// dibelakang: [] atau array_push()
$hari[] = "Kamis";
$hari[] = "Jum'at";
print_r($hari);
echo "<br>";
array_push($bulan, "April");
print_r($bulan);
// Di awal array: array_unshift()
array_unshift($mhs, "233040156");
print_r($mhs);
echo "<hr>";

// Menghapus isi array
// di belakang: array_pop()
// di depan: array_shift()
array_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan);

// 4. Mencetak Array (2)
