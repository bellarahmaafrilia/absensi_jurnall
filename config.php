<?php

// untuk menyimpan informasi koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "absensi_jurnal";

// Membuat Koneksi ke MySQL

$conn = new mysqli($host, $user, $pass, $db);

// Mengecek Koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
