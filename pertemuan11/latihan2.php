<?php
// 1. Menentukan nama database yang akan dibuat
$dbname = "lat_dbase";

// 2. Membuat koneksi awal ke server MySQL (tanpa memilih nama database)
$link = new mysqli("localhost", "root", "");

// 3. Memeriksa apakah koneksi ke server berhasil
if ($link->connect_error) {
    die("Koneksi ke server gagal: " . $link->connect_error);
}

// 4. Menjalankan query untuk membuat database baru jika belum ada
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";

if ($link->query($sql) === TRUE) {
    echo "Database $dbname berhasil dibuat";
} else {
    echo "Gagal membuat database: " . $link->error;
}

// 5. Menutup koneksi
$link->close();
?>