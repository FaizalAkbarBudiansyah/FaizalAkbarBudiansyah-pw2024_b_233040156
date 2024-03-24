<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas6a</title>

    <style>
        .kotak1 {
            display: inline-flex;
            width: 50px;
            height: 50px;
            font-size: 30px;
            background-color: pink;
            border: 1px solid black;
            justify-content: center;
            align-items: center;
            margin: 2px;
        }

        .kotak2 {
            display: inline-flex;
            width: 50px;
            height: 50px;
            font-size: 30px;
            background-color: black;
            color: white;
            border: 1px solid pink;
            justify-content: center;
            align-items: center;
            margin: 2px;
        }
    </style>
</head>

<body>
    <?php if (isset($_GET["angka"])) : ?>
        <?php
        for ($i = $_GET["angka"]; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                if ($i % 2 == 0) {
                    echo '<div class= "kotak1">' . $i . '</div>';
                } else
                    echo '<div class= "kotak2">' . $i . '</div>';
            }
            echo "<br>";
        }
        ?>
    <?php endif; ?>
</body>

</html>