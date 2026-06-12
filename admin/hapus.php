<?php
// Hubungkan ke database
// include 'koneksi.php';
$koneksi = mysqli_connect("localhost", "root", "", "fakhry_baby_shop");

// Ambil ID dari URL (yang dikirim dari link hapus di tabel)
$id = $_GET['id'];

// Perintah untuk menghapus data berdasarkan ID
$query = "DELETE FROM produk WHERE id='$id'";
$hasil = mysqli_query($koneksi, $query);

// Cek apakah hapus berhasil
if ($hasil) {
    // Jika berhasil, kembali ke halaman utama
    header("location:index.php?pesan=hapus_berhasil");
} else {
    // Jika gagal, tampilkan pesan
    echo "Gagal menghapus data: " . mysqli_error($koneksi);
}
