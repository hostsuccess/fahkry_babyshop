<?php
// Mengaktifkan session php
session_start();

// Mengambil data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// ATUR USERNAME DAN PASSWORD DI SINI
$username_admin = "admin";
$password_admin = "admin123"; // Ganti sesuai keinginan

// Menyeleksi data user
if ($username == $username_admin && $password == $password_admin) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:index.php");
} else {
    header("location:login.php?pesan=gagal");
}
