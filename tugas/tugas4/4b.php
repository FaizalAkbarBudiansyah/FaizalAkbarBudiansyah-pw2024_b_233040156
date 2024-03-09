<?php
$perangkat = array("Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD");
$perangkatbaru = array("Card Reader", "Hard Disk", "Modem", "Motherboard", "PC Coller", "Processor", "SSD", "VGA Card")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head>

<body>

    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
        <?php foreach ($perangkat as $p) : ?>
            <li><?= $p; ?></li>
        <?php endforeach ?>
    </ol>

    <h3>Macam-macam perangkat keras komputer baru</h3>
    <ol>
        <?php foreach ($perangkatbaru as $pb) : ?>
            <li><?= $pb; ?></li>
        <?php endforeach ?>
    </ol>

</body>

</html>