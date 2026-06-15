<?php
$host = "localhost";
$user = "c205fakhry";
$pass = "fakhry123";
$db   = "c205fakhrybabyshop";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
