<?php

require 'kendaraan.php';
require 'mobil.php';

$kendaraan = new Kendaraan("Mobil", "Hijau", "DG0123");

echo $kendaraan->name;
echo "\n";

echo $kendaraan->info();
echo "\n";


echo $kendaraan->getPlatNumber();

$mobil = new Mobil("Avanza", "Hitam", "DG0456");

echo $mobil->infoMobil();
echo "\n";