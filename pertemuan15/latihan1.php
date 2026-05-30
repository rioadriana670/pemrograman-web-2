<?php
$value = 'rio adriana';
$value2 = 'rio adriana'; // Sesuai permintaan Anda

// Mengatur cookie dengan masa berlaku 1 jam (3600 detik)
setcookie("username", $value, time() + 3600);
setcookie("namalengkap", $value2, time() + 3600);

echo "<h1>Ini halaman pengesetan cookie</h1>";
echo "<h2>Klik <a href='cookie2.php'>di sini</a> untuk pemeriksaan cookies</h2>";
?>