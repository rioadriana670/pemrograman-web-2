<?php
// Mendefinisikan variabel a dengan nilai 5 [cite: 19]
$a = 5;

// Melakukan pengecekan kondisi [cite: 20-22]
if ($a > 0) {
    $status = "A lebih besar dari 0";
} else if ($a < 0) {
    $status = "A lebih kecil dari 0";
} else {
    $status = "A sama dengan 0";
}

// Menampilkan hasil ke layar [cite: 84]
echo "Status: " . $status;
?>