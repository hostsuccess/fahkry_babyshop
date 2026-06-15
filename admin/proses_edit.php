<?php
include 'koneksi.php';



$id = $_POST['id'];
$nama = $_POST['nama_produk'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];

// Cek apakah user mengupload gambar baru
if ($_FILES['gambar']['name'] != "") {
    $nama_file = $_FILES['gambar']['name'];
    move_uploaded_file($_FILES['gambar']['tmp_name'], "../img/" . $nama_file);

    // Update dengan gambar baru
    mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama', harga='$harga', gambar='$nama_file', kategori='$kategori' WHERE id='$id'");
} else {
    // Update tanpa mengubah gambar
    mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama', harga='$harga', kategori='$kategori' WHERE id='$id'");
}

header("location:index.php?pesan=berhasil");
