<?php

function hitungDenda(int $hariTerlambat): int
{
	$dendaPerHari = 500;
	$totalDenda = $hariTerlambat * $dendaPerHari;
	return $totalDenda;
}

function namaLengkap(?string $namaPertama, ?string $namaKedua, ?string $namaKetiga = null): string
{
	return "$namaPertama $namaKedua $namaKetiga";
}

echo hitungDenda(5) . "\n"; // Output: 2500
echo hitungDenda("5") . "\n"; // Output: 2500
echo namaLengkap("John", "Doe", "Smith") . "\n"; // Output: John Doe Smith
echo namaLengkap("Jane", "Doe") . "\n"; // Output: Jane Doe

greeting("morning");
function greeting(string $zona)
{
	switch ($zona) {
		case 'morning':
			$greeting = "Hello, good $zona!";
			break;

		case 'afternoon':
			$greeting = "Hello, good $zona!";
			break;
		case 'evening':
			$greeting = "Hello, good $zona!";
			break;
		case 'night':
			$greeting = "Hello, good $zona!";
			break;

		default:
			$greeting = "Hello!";
			break;
	}
	return $greeting;
}

echo greeting("morning") . "\n"; // Output: Hello, good morning!
echo greeting("afternoon") . "\n"; // Output: Hello, good afternoon!