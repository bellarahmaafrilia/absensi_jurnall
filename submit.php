<?php

// Menghubungkan ke Database
include 'config.php';

// Memasukkan Data ke Database
$sql = "INSERT INTO jurnal (nama, asal_sekolah, tanggal, keterangan, kegiatan) VALUES
        ('{$_POST['nama']}', '{$_POST['asal_sekolah']}', '{$_POST['tanggal']}', '{$_POST['keterangan']}', '{$_POST['kegiatan']}')";

// menjalankan
$conn->query($sql);

// Menampilkan Notifikasi 
echo "<script>alert('Data berhasil dikirim!'); window.location='confirm.html';</script>";
?>
