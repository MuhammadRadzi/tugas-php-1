<?php

class Koleksi {
    public string $judul;
    public int $stok;
    public bool $isTersedia;

    public function __construct(string $judul, int $stok, bool $isTersedia)
    {
        $this->judul = $judul;
        $this->stok = $stok;
        $this->isTersedia = $isTersedia;
    }

    public function status() {
        return $this->stok > 0 ? ($this->isTersedia = true) : ($this->isTersedia = false);
    }

    // Inheritance: Kelas warisan yang mewarisi sifat induk class-nya
}

class Majalah extends Koleksi {
    public string $edisi;

    public function __construct(string $judul, int $stok, bool $isTersedia, string $edisi)
    {
        parent::__construct($judul, $stok, $isTersedia);
        $this->edisi = $edisi;
    }

    public function info() {
        $isTersedia = $this->isTersedia ? " Majalah tersedia" : " Majalah tidak tersedia";
        return "$this->judul edisi $this->edisi -" . $isTersedia;
    }
}

$majalah = new Majalah("Tempoe", 3, true, "Agustus 2026");
echo $majalah->info() . "\n";

// Visibility Property
// 1. Public: dapat diakses dari mana saja
// 2. Protected: hanya dapat diakses dari class itu sendiri dan class turunannya
// 3. Private: hanya dapat diakses dari class itu sendiri