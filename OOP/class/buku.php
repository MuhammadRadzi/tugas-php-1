<?php

class Buku
{
    // Property
    public $judul;
    public $penulis;
    public $stok;


    public function __construct($judul, $penulis, $stok)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->stok = $stok;
    }

    // Method
    public function info()
    {
        return "$this->judul karya $this->penulis (stok: $this->stok)";
    }

    public function pinjam()
    {
        if ($this->stok > 0) {
            $this->stok--;
            return "Berhasil di pinjam. Sisa stok: $this->stok";
        }
        return "Stok habis, tidak bisa dipinjam";
    }

    public function balikin ()
    {
        return $this->stok++;
    }
}

// Membuat object (istilahnya: instansiasi)
// $buku1 = new Buku();
// $buku1->judul = "Laskar Pelangi";
// $buku1->penulis = "Andrea Hirata";
// $buku1->stok = 12;

$buku1 = new Buku("Laskar Pelangi", "Andrea Hirata", "12");
echo $buku1->info();
echo $buku1->pinjam() . "\n";
echo $buku1->pinjam() . "\n";
echo $buku1->balikin() . "\n";
echo $buku1->info() . "\n";

$buku2 = new Buku("Bumi Manusia","Pramoedya Ananta Toer","5");
// $buku2->judul = "Bumi Manusia";
// $buku2->penulis = "Pramoedya Ananta Toer";
// $buku2->stok = 5;

echo $buku1->info(); // Laskar Pelangi karya Andrea Hirata (stok: 12)
echo "\n";
echo $buku2->info(); // Bumi Manusia karya Pramoedya Ananta Toer (stok: 5)