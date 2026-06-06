<?php
// Data nama yang akan ditampilkan
$daftar_nama = ["rio", "ahmad", "arul"];

echo "Koneksi dan Query Berhasil! Data siap digunakan.<br><br>";

// Menampilkan data perulangan
foreach ($daftar_nama as $nama) {
    echo $nama . "<br>";
}
?>