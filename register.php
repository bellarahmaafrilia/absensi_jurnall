<?php

// Menghubungkan ke Database
include 'config.php';

// Menerima Data dari Formulir
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$asal_sekolah = $_POST['asal_sekolah'];

// Menyimpan Data ke Database
$sql = "INSERT INTO users (username, password, asal_sekolah) VALUES ('$username', '$password', '$asal_sekolah')";

// Menampilkan Notifikasi
if ($conn->query($sql) === TRUE) {
    echo "<script>
    alert('Pendaftaran berhasil! Silakan login.'); 
    window.location='index.html';
    </script>";
} else {
    echo "Error: " . $conn->error;
}
// Menutup Koneksi
$conn->close();
?>
