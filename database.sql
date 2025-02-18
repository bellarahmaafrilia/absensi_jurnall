CREATE DATABASE absensi_jurnal;
USE absensi_jurnal;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    asal_sekolah VARCHAR(100) NOT NULL
);

CREATE TABLE jurnal (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    asal_sekolah VARCHAR(100) NOT NULL,
    tanggal DATE NOT NULL,
    keterangan ENUM('Hadir', 'Izin', 'Sakit') NOT NULL,
    kegiatan TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
