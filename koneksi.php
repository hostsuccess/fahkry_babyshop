<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "fakhry_baby_shop";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
