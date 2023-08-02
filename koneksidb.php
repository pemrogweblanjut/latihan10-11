<?php
$host = "127.0.0.1"; //bisa diisi dengan localhost
$user = "root";
$pass = "";
$db_name = "inv_labkom";
$koneksi = mysqli_connect($host, $user, $pass, $db_name);

// Cek koneksi
if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>