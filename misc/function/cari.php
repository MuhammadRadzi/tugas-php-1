<?php
// Data contoh daftar buku perpustakaan
$perpustakaan = [
    ["judul" => "Laskar Pelangi", "penulis" => "Andrea Hirata", "tahun" => 2005, "stok" => 12],
    ["judul" => "Bumi Manusia", "penulis" => "Pramoedya Ananta Toer", "tahun" => 1980, "stok" => 5],
    ["judul" => "Negeri 5 Menara", "penulis" => "A. Fuadi", "tahun" => 2009, "stok" => 0],
    ["judul" => "Sang Pemimpi", "penulis" => "Andrea Hirata", "tahun" => 2006, "stok" => 8],
    ["judul" => "Filosofi Teras", "penulis" => "Henry Manampiring", "tahun" => 2019, "stok" => 15],
];

$kataKunci = isset($_GET['kata']) ? trim($_GET['kata']) : '';
$hasilPencarian = [];

if ($kataKunci !== '') {
    foreach ($perpustakaan as $buku) {
        // Cek apakah judul buku mengandung kata kunci (pencarian case-insensitive)
        if (stripos($buku['judul'], $kataKunci) !== false || stripos($buku['penulis'], $kataKunci) !== false) {
            $hasilPencarian[] = $buku;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian Buku</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        a { text-decoration: none; color: #0066cc; }
    </style>
</head>
<body>
    <h1>Hasil Pencarian</h1>
    <p>Kata kunci pencarian: <strong><?php echo htmlspecialchars($kataKunci); ?></strong></p>

    <?php if ($kataKunci === ''): ?>
        <p>Silakan masukkan kata kunci pencarian terlebih dahulu.</p>
    <?php elseif (empty($hasilPencarian)): ?>
        <p>Maaf, buku yang Anda cari tidak ditemukan.</p>
    <?php else: ?>
        <table>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun</th>
                <th>Stok</th>
            </tr>
            <?php $no = 1; foreach ($hasilPencarian as $buku): ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo htmlspecialchars($buku['judul']); ?></td>
                <td><?php echo htmlspecialchars($buku['penulis']); ?></td>
                <td><?php echo $buku['tahun']; ?></td>
                <td><?php echo $buku['stok']; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <p style="margin-top: 20px;"><a href="index.php">&larr; Kembali ke Beranda</a></p>
</body>
</html>
