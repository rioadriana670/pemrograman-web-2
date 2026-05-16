<?php
// 1. Membuat koneksi ke database (Host, Username, Password, Nama Database)
$con = new mysqli("localhost", "root", "", "lat_dbase");

// 2. Memeriksa apakah koneksi berhasil
if ($con->connect_error) {
    die("Koneksi gagal: " . $con->connect_error);
}

// 3. Menjalankan perintah query DELETE
$sql = "DELETE FROM tbl_mhs WHERE LastName='Prabowo'";

if ($con->query($sql) === TRUE) {
    echo "Data berhasil dihapus.";
} else {
    echo "Error saat menghapus data: " . $con->error;
}

// 4. Menutup koneksi database
$con->close();
?>