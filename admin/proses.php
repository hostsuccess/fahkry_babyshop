<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];

    // Upload gambar
    $nama_file = $_FILES['gambar']['name'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($tmp_file, '../img/' . $nama_file);

    $query = "INSERT INTO produk (nama_produk, harga, gambar) VALUES ('$nama', '$harga', '$nama_file')";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Produk berhasil ditambahkan!'); window.location='tambah_produk.php';</script>";
    }
}
