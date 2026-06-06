<?php
// 1. Koneksi Database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_mahasiswa"; // Pastikan nama database di phpMyAdmin sesuai dengan ini

$koneksi = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// 2. Eksekusi Query
$query = "SELECT * FROM mahasiswa"; 

// Menggunakan or die(mysqli_error()) untuk debugging
$hasil = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

// 3. Menampilkan pesan sukses dan data
echo "Koneksi dan Query Berhasil! Data siap digunakan.<br><br>";
echo "Daftar Nama Mahasiswa:<br>";

while ($row = mysqli_fetch_array($hasil)) {
    // Menampilkan isi dari kolom 'nama'
    echo "- " . $row['nama'] . "<br>"; 
}
?>