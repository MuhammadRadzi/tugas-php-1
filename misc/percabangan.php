<?php

$nilaiAhmad = 80;
$kkm = 85;

if ($nilaiAhmad >= $kkm) {
    echo "Selamat, Anda Lulus!\n";
} else if ($nilaiAhmad == $kkm) {
    echo "Nilai Anda tepat di batas KKM.\n";
} else {
    echo "Maaf, Anda Tidak Lulus.\n";
}

$nilaiFadli = "85";
if ($nilaiFadli === $kkm) {
    echo "Selamat, Anda Lulus!\n";
} else {
    echo "Maaf, Anda Tidak Lulus.\n";
}

// Ternary Operator
$usia = 20;

if ($usia >= 18) {
    echo "Bisa buat KPU\n";
} else {
    echo "Kartu Biasa\n";
}

$isLulus = ($usia >= 17) ? "Bisa buat KPU\n" : "Kartu Biasa\n";
echo "\n ".$isLulus;