<?php
// Konfigurasi Database - Pastikan nama database sesuai dengan yang ada di phpMyAdmin
$host = "localhost";
$user = "root";
$pass = ""; // Biasanya kosong secara default di XAMPP
$db   = "db_mahasiswa"; 

// Membuat koneksi ke MySQL
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek jika koneksi gagal
if (!$conn) {
    die("<div style='color:red; text-align:center; margin-top:20px;'>
         <h3>Koneksi Gagal!</h3>
         <p>Pastikan MySQL di XAMPP sudah di-START dan nama database 'db_mahasiswa' sudah dibuat.</p>
         </div>");
}

// Proses jika tombol submit ditekan
if (isset($_POST['submit'])) {
    $nim      = $_POST['nim'];
    $nama     = $_POST['nama'];
    $jurusan  = $_POST['jurusan'];
    $alamat   = $_POST['alamat'];
    $no_telp  = $_POST['no_telp'];

    $query = "INSERT INTO mahasiswa (nim, nama, jurusan, alamat, no_telp) VALUES ('$nim', '$nama', '$jurusan', '$alamat', '$no_telp')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data berhasil disimpan!'); window.location='latihan1.php';</script>";
    } else {
        echo "<script>alert('Gagal: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Input Mahasiswa</title>
    <style>
        body { 
            font-family: 'Segoe UI', sans-serif; 
            margin: 0; height: 100vh; 
            display: flex; justify-content: center; align-items: center; 
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); 
        }
        .form-container { 
            width: 400px; background: white; padding: 30px; 
            border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.2); 
        }
        h2 { text-align: center; color: #333; margin-bottom: 20px; }
        p { margin: 10px 0 5px; font-weight: 600; color: #555; }
        input, select { 
            width: 100%; padding: 10px; border: 1px solid #ddd; 
            border-radius: 8px; box-sizing: border-box; 
        }
        .btn-group { display: flex; justify-content: space-between; margin-top: 20px; }
        button { 
            width: 48%; padding: 10px; border: none; border-radius: 8px; 
            cursor: pointer; font-weight: bold; transition: 0.3s; 
        }
        button[name="submit"] { background: #27ae60; color: white; }
        button[type="reset"] { background: #e74c3c; color: white; }
        button:hover { opacity: 0.8; }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Form Input Mahasiswa</h2>
    <form method="POST" action="">
        <p>NIM:</p> <input type="text" name="nim" required>
        <p>Nama:</p> <input type="text" name="nama" required>
        <p>Jurusan:</p>
        <select name="jurusan" required>
            <option value="">- Pilih Jurusan -</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
        </select>
        <p>Alamat:</p> <input type="text" name="alamat">
        <p>No. Telp:</p> <input type="text" name="no_telp">
        
        <div class="btn-group">
            <button type="submit" name="submit">SUBMIT</button>
            <button type="reset">CANCEL</button>
        </div>
    </form>
</div>

</body>
</html>