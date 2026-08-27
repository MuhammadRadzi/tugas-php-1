<?php

require_once "vendor/autoload.php";

// use App\Buku;

// $buku = new Buku("Laskar Pelangi", 15);
// echo $buku->info();

use App\Radzi;

$radzi = new Radzi("Radzi", 18);
$radzi2 = new Radzi("Radzi", 17);
$radzi3 = new Radzi("Radzi", 14);
echo $radzi->sapa() . "\n";
echo $radzi2->sapa() . "\n";
echo $radzi3->sapa() . "\n";
