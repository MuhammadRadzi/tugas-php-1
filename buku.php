<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #fff3e5;
            margin: 0;
            padding: 40px 20px;
            color: #334155;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            box-sizing: border-box;
        }

        .book-card {
            background-color: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
            padding: 32px;
            max-width: 450px;
            width: 100%;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.8);
        }

        .book-cover {
            width: 180px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
            margin-bottom: 20px;
        }

        .book-title {
            font-size: 28px;
            font-weight: 700;
            color: #1e293b;
            margin: 10px 0 20px 0;
            letter-spacing: -0.5px;
        }

        .book-info {
            font-size: 15px;
            line-height: 1.6;
            color: #475569;
            background-color: #f8fafc;
            padding: 16px;
            border-radius: 12px;
            margin-bottom: 24px;
            text-align: left;
            border: #cfcfcf 1px solid;
        }

        .book-info strong {
            color: #1e293b;
        }

        .status-badge {
            display: inline-block;
            padding: 6px 16px;
            font-size: 13px;
            font-weight: 600;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-published {
            color: #63a77c;
            border: 1px solid #63a77c;
        }

        .status-unpublished {
            color: #c55d5d;
            border: 1px solid #c55d5d;
        }
    </style>
</head>
<body>

    <div class="book-card">
        <?php
        $buku = "Rahasia Hati";
        $halaman = 288;
        $author = "Natsume Soseki";
        $penerbit = "Gramedia";
        $tahun = 2016;
        $is_published = 1;
        $gambar_sampul = "https://image-v2.free-ebook.my.id/sketch/rahasia-hati-by-natsume-soseki/rahasia-hati-by-natsume-soseki-0.jpg?v=2";

        echo "<img src='$gambar_sampul' alt='Buku $buku' class='book-cover'>";
        echo "<h1 class='book-title'>$buku</h1>";
        echo "<p class='book-author'>Oleh: $author</p>";
        echo "<div class='book-info'>";
        echo "Buku <strong>$buku</strong> yang ditulis oleh <strong>$author</strong> diterbitkan oleh <strong>$penerbit</strong> pada tahun <strong>$tahun</strong> dengan ketebalan <strong>$halaman halaman</strong>.";
        echo "</div>";

        if ($is_published) {
            echo "<span class='status-badge status-published'>Sudah Diterbitkan</span>";
        } else {
            echo "<span class='status-badge status-unpublished'>Belum Diterbitkan</span>";
        }
        ?>
    </div>

</body>
</html>
