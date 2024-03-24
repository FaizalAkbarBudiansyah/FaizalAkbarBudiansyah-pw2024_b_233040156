<?php
// cek tombol submit
if (isset($_POST["submit"])) {
    // cek username & password
    if ($_POST["username"]  == "admin" && $_POST["password"] == "admin") {
        // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // jika salah, error
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">

    <style>
        body {
            text-align: center;
            background-color: black;
        }

        h1,
        .input {
            font-size: "Sacramento", cursive;
            color: yellow;
        }

        img {
            width: 250px;
        }

        .input input {
            margin: 4px;
            padding: 5px;
        }

        .input button {
            background-color: yellow;
            margin-top: 5px;
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1>Login Admin</h1>
    <img src="logo-removebg-preview.png" alt="BabyMonster">
    <?php if (isset($error)) : ?>
        <h4 style="color: red; font-style: italic;">username / password salah!</h4>
    <?php endif; ?>
    <form action="" method="post">

        <div class="input">
            <label for="username">Username :</label>
            <input type="text" name="password" id="password">
        </div>

        <div class="input">
            <button type="submit" name="submit">Login</button>
        </div>

    </form>
</body>

</html>