<?php
// Konfigurasi Database
$host = "localhost";
$user = "root";     // Default XAMPP
$pass = "";         // Default XAMPP kosong
$db   = "db_kos";   // Nama database yang kita buat di database.sql

// Membuat koneksi ke MySQL
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek apakah koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Set charset ke utf8 agar data tidak rusak (opsional tapi disarankan)
mysqli_set_charset($conn, "utf8");
?>
