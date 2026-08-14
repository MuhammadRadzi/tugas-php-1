<?php

// Operator Tambah
$a = 10;
$b = 5;
$hasilTambah = $a + $b;
echo "Hasil penjumlahan $a dan $b: " . $hasilTambah;

// Operator Kurang
$hasilKurang = $a - $b;
echo "\nHasil pengurangan $a dan $b: " . $hasilKurang;
$a = 15;
echo "\nHasil pengurangan $a dan $b: " . $hasilKurang;

// Operator Kali
$b = 10;
$hasilKali = $a * $b;
echo "\nHasil perkalian $a dan $b: " . $hasilKali;

// Operator Bagi
$a = 2;
$hasilBagi = $b / $a;
echo "\nHasil pembagian $b dan $a: " . $hasilBagi;

// Operator Modulus
$a = 3;
$b = 17;
$hasilModulus = $b % $a;
echo "\nHasil modulus $b dan $a: " . $hasilModulus;

// Operator Pangkat
$a = 2;
$b = 3;
$hasilPangkat = $a ** $b;
echo "\nHasil pangkat $a dan $b: " . $hasilPangkat;

// Operator .= 
$string = "Hello World";

$string .= "!";
// $string2 = $string .= "!";
// echo "\n" . $string;
// echo "\n" . $string2;

$message = "Tagihan anak anda adalah RP 100.000";

$final = "$message dan harus dibayar sebelum tanggal 10 Juni 2024";
$message .= " dan harus dibayar sebelum tanggal 10 Juni 2024";

echo "\n" . $final;
echo "\n" . $message;

// Operator +=
$angka = 20;
$angka += 10; // $angka = $angka + 10
$angka = $angka + 10; 
echo "\n $angka";
var_dump($angka);

// Operator -=
$angka = 20;
$angka -= 5;
echo "\n $angka";

// Operator *=
$angka = 20;
$angka *= 5;
echo "\n $angka";

// Operator /=
$angka = 20;
$angka /= 5;
echo "\n $angka";