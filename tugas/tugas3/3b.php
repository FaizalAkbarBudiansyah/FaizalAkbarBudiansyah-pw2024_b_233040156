<?php

function urutanAngka($angka)
{
    $Nomor = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $Nomor . " ";
            $Nomor++;
        }
        echo "<br>";
    }
}

urutanAngka(5);
