<?php
// Switch Case

$buku = "Novel";

switch ($buku) {
    case "Mapel":
        echo "Buku ini adalah Mapel.\n";
        break;
    case "Komik":
        echo "Buku ini adalah Komik.\n";
        break;
    case "Novel":
        echo "Buku ini adalah Novel.\n";
        break;
    default:
        echo "Jenis buku tidak diketahui.\n";
}

$nilaiEl = 80;
$kkm = 75;

switch ($nilaiEl >= $kkm) {
    case true:
        echo "Selamat, Anda Lulus!\n";
        break;
    case false:
        echo "Maaf, Anda Tidak Lulus.\n";
        break;
    default:
        echo "Hasil tidak ditemukan.\n";
}

// match

$class = "lg";

$result = match ($class) {
    "sm" => "Small",
    "lg" => "Large",
    "xl" => "Extra Large",
    "xxl" => "Extra Extra Large",
};

$status = 404;
$webResult = match ($status) {
    200, 201 => "Success",
    400 => "Bad Request",
    401 => "Unauthorized",
    403 => "Forbidden",
    404 => "Not Found",
    default => "Unknown Status",
};

echo $result . "\n";
echo $webResult . "\n";

// Kenapa switch lebih baik daripada if else? Karena switch case lebih mudah dibaca dan lebih cepat daripada if else.