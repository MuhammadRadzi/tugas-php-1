<?php
// Array berisi 5 nama teman
$teman = [
    "Ammar",
    "Azzam",
    "Muadz",
    "Rezky",
    "Kun Syafei"
];
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Daftar Teman</title>
</head>

<body>
    <h1>Daftar Nama Teman</h1>
    <ul>
        <?php foreach ($teman as $nama): ?>
            <li><?php echo $nama; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>