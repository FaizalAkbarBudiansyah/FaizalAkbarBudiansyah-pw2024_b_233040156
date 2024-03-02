<?php
// hitung total volume 2 kubus
// sisi kunus a = 9, sisi kubus b = 4

// $sisi_a = 9;
// $sisi_b = 4;

// $volume_a = $sisi_a * $sisi_a * $sisi_a;
// $volume_b = $sisi_b * $sisi_b * $sisi_b;

// $totalAB = $volume_a + $volume_b;

// echo "Total Volume kubus A dan B = $totalAB";

function total_volume_dua_kubus($a, $b)
{
    $volume_a = $a * $a * $a;
    $volume_b = $b * $b * $b;
    $total = $volume_a + $volume_b;

    return $total;
}

echo "Total Volume A & B = " . total_volume_dua_kubus(9, 4);
echo "<br>";
echo "Total Volume C & D = " . total_volume_dua_kubus(10, 4);
echo "<br>";
