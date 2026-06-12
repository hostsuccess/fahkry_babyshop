<?php
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Simpan ID produk ke dalam array session
    $_SESSION['keranjang'][$id] = 1;
    header("Location: ../index.php#koleksi");
}
