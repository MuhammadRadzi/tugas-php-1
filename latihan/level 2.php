<?php

// if else
$terlambat = 5;
$denda = 0;

if ($terlambat >= 1 && $terlambat <= 3) {
    $denda = $terlambat * 500;
} elseif ($terlambat >= 4 && $terlambat <= 7) {
    $denda = $terlambat * 1000;
} elseif ($terlambat > 7) {
    $denda = $terlambat * 2000;
} else {
    $denda = 0;
}
echo "\n".$denda; // 5000

// switch case
$terlambat = 3;

switch (true) {
    case ($terlambat >= 1 && $terlambat <= 3):
        $denda = $terlambat * 500;
        break;
    case ($terlambat >= 4 && $terlambat <= 7):
        $denda = $terlambat * 1000;
        break;
    case ($terlambat > 7):
        $denda = $terlambat * 2000;
        break;
    default:
        $denda = 0;
}

echo "\n".$denda; // 1500

// match
$terlambat = 1;

$denda = match (true) {
    ($terlambat >= 1 && $terlambat <= 3) => $terlambat * 500,
    ($terlambat >= 4 && $terlambat <= 7) => $terlambat * 1000,
    ($terlambat > 7) => $terlambat * 2000,
    default => 0,
};

echo "\n".$denda; // 500