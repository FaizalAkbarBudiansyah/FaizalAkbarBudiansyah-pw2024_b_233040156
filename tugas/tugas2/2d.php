<?php

echo "<table style='border: 2px solid black; border-collapse: collapse;'>";
for ($i = 1; $i <= 5; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        if (($i + $j) % 2 == 0) {
            echo "<td style='width: 50px; height: 50px; background-color: black;'></td>";
        } else {
            echo "<td style='width: 50px; height: 50px; background-color: white;'></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
