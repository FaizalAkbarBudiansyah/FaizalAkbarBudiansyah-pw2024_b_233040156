<?php
require 'functions.php';

$id = $_GET['id'];
if (isset($_POST['tambah'])) {

    if (hapus($id) > 0) {
        echo "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'index.php';
    </script>";
    }
}
