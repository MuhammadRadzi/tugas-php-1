<?php

$arrayBooks = ["Laskar Pelangi", "Bumi Manusia", "Negeri 5 Menara", "Durusul Lughoh", "Sang Pemimpin", "Tutor MBG"];
$books = count($arrayBooks);
echo $arrayBooks[0];
echo $arrayBooks[2];
echo count($arrayBooks);


for ($i = 0; $i < $books; $i++) {
    echo $arrayBooks[$i] . "\n";
}

// Foreach
foreach ($arrayBooks as $Books) {
    echo "$Books <br>\n";
}

//Array Asosiatif
$buku = [
    "judul"   => "Laskar Pelangi",
    "penulis" => "Andrea Hirata",
    "tahun"   => 2005,
    "stok"    => 12
];

echo $buku["judul"] . "\n";
echo $buku["stok"] . "\n";

//Array dalam Array
$perpustakaan = [
    ["judul" => "Laskar Pelangi", "penulis" => "Andrea Hirata", "stok" => 12],
    ["judul" => "Bumi Manusia", "penulis" => "Pramoedya A.T.", "stok" => 5],
    ["judul" => "Negeri 5 Menara", "penulis" => "A. Fuadi", "stok" => 0],
];

foreach ($perpustakaan as $buku) {
    echo $buku["judul"] . " — stok: " . $buku["stok"] . "<br>" . "\n";
}
