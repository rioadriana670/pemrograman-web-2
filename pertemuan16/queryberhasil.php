<?php
// 1. Konfigurasi
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_mahasiswa"; // GANTI ini dengan nama database yang sudah Anda buat di phpMyAdmin

// 2. Koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db);

// 3. PENTING: Cek apakah koneksi berhasil sebelum lanjut ke query
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// 4. Query (sekarang aman karena koneksi sudah dipastikan berhasil)
$query = "SELECT * FROM mahasiswa"; 
$hasil = mysqli_query($koneksi, $query);

if (!$hasil) {
    die("Query Error: " . mysqli_error($koneksi));
}

echo "Berhasil!";
?>