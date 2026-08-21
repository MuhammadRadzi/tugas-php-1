<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pencarian Buku</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 50px;
		}

		form {
			margin-bottom: 20px;
		}

		input[type="text"] {
			padding: 8px;
			width: 300px;
		}

		button {
			padding: 8px 15px;
		}
	</style>
</head>

<body>
	<h1>Perpustakaan Digital</h1>
	<form action="./cari.php" method="GET">
		<input type="text" name="kata" placeholder="Masukkan nama buku atau penulis...">
		<button type="submit">Cari</button>
	</form>

	<?php
	if (isset($_GET['kata'])) {
		$kata = htmlspecialchars($_GET["kata"]);
		echo "<p>Kamu mencari: <b>$kata</b></p>";
	}
	?>
</body>

</html>