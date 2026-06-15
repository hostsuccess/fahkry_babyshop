<?php
$host = "localhost";
$user = "root";
$pass = "12345678";
$db   = "fakhry_baby_shop";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
