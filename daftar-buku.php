<!DOCTYPE html>
<html>

<head>
    <title>Daftar Buku</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #333;
            padding: 8px 14px;
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
            <th>Status</th>
        </tr>
        <?php
        $perpustakaan = [
            ["judul" => "Laskar Pelangi", "penulis" => "Andrea Hirata", "stok" => 12],
            ["judul" => "Bumi Manusia", "penulis" => "Pramoedya A.T.", "stok" => 5],
            ["judul" => "Negeri 5 Menara", "penulis" => "A. Fuadi", "stok" => 0],
        ];
        $no = 1;
        foreach ($perpustakaan as $buku) {
            $status = $buku["stok"] > 0 ? "Tersedia" : "Habis";
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>" . $buku["judul"] . "</td>";
            echo "<td>" . $buku["penulis"] . "</td>";
            echo "<td>$status</td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
</body>

</html>