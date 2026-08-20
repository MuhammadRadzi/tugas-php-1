<?php
$perpustakaan = [
    ["judul" => "Laskar Pelangi", "penulis" => "Andrea Hirata", "stok" => 12, "tahun" => 2005],
    ["judul" => "Bumi Manusia", "penulis" => "Pramoedya A.T.", "stok" => 5, "tahun" => 1980],
    ["judul" => "Negeri 5 Menara", "penulis" => "A. Fuadi", "stok" => 0, "tahun" => 2009],
    ["judul" => "Filosofi Kopi", "penulis" => "Dewi Lestari", "stok" => 8, "tahun" => 2006],
    ["judul" => "Laut Bercerita", "penulis" => "Leila S. Chudori", "stok" => 3, "tahun" => 2017]
];

$jumlah_judul = count($perpustakaan);
$total_stok = 0;
$buku_terbanyak = $perpustakaan[0];

foreach ($perpustakaan as $buku) {
    $total_stok += $buku["stok"];
    if ($buku["stok"] > $buku_terbanyak["stok"]) {
        $buku_terbanyak = $buku;
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Perpustakaan</title>
    <style>
        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Daftar Buku Perpustakaan</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Stok</th>
        </tr>
        <?php
        $no = 1;
        foreach ($perpustakaan as $buku):
            $bg_color = ($buku["stok"] == 0) ? 'style="background:#fdd;"' : '';
        ?>
            <tr <?php echo $bg_color; ?>>
                <td><?php echo $no++; ?></td>
                <td><?php echo $buku["judul"]; ?></td>
                <td><?php echo $buku["penulis"]; ?></td>
                <td><?php echo $buku["tahun"]; ?></td>
                <td><?php echo $buku["stok"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h3>Ringkasan:</h3>
    <ul>
        <li>Jumlah Judul Buku: <?php echo $jumlah_judul; ?></li>
        <li>Total Stok Seluruh Buku: <?php echo $total_stok; ?></li>
        <li>Buku dengan Stok Terbanyak: <strong><?php echo $buku_terbanyak["judul"]; ?></strong> (<?php echo $buku_terbanyak["stok"]; ?> stok)</li>
    </ul>
</body>

</html>