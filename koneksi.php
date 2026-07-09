<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "buku_tamu"; // Pastikan di phpMyAdmin namanya 'buku_tamu'

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>