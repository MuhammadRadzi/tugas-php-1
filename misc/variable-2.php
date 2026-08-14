<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $buku = "Pemrograman PHP";
    $halaman = 30;
    $penerbit = "Gramedia";
    $tahun = 2020;
    $is_published = true;

    echo "Buku $buku diterbitkan oleh $penerbit pada tahun $tahun sebanyak $halaman halaman.";
    echo "<br>";
    var_dump($buku);
    echo "<br>";
    var_dump($is_published);

    echo "<h1>Daftar Buku</h1>";
    ?>
</body>

</html>