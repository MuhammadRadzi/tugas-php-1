<?php
$perpustakaan = [
    ["judul" => "Laskar Pelangi", "penulis" => "Andrea Hirata", "stok" => 12],
    ["judul" => "Bumi Manusia", "penulis" => "Pramoedya A.T.", "stok" => 5],
    ["judul" => "Negeri 5 Menara", "penulis" => "A. Fuadi", "stok" => 0],
];

$total_stok = 0;
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Daftar Buku Tersedia</title>
</head>

<body>
    <ul>
        <?php foreach ($perpustakaan as $buku): ?>
            <?php if ($buku["stok"] > 0): ?>
                <li><?php echo $buku["judul"]; ?> oleh <?php echo $buku["penulis"]; ?> (Stok: <?php echo $buku["stok"]; ?>)</li>
            <?php endif; ?>
            <?php $total_stok += $buku["stok"]; ?>
        <?php endforeach; ?>
    </ul>

    <p><strong>Total seluruh stok buku:</strong> <?php echo $total_stok; ?></p>
</body>

</html>