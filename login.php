<?php
// Menghubungkan ke Database
include 'config.php';
session_start();

// Menerima Data dari Form Login
$username = $_POST['username'];
$password = $_POST['password'];

// Mengecek Username di Database
$result = $conn->query("SELECT * FROM users WHERE username='$username'");
$row = $result->fetch_assoc();

// Memverifikasi Password
if ($row && password_verify($password, $row['password'])) {
    $_SESSION['username'] = $username;
    header("Location: dashboard.html");
}

// Menampilkan Notifikasi Jika Login Gagal
else {
    echo "<script>alert('Login gagal! Periksa username dan password.'); window.location='index.html';</script>";
}
?>
