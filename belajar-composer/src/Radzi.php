<?php

namespace App;

class Radzi {
    public function __construct(
        public string $nama,
        public int $umur
    ) {}

    public function getKelas(): string {
        return match (true) {
            $this->umur > 17 => "tidak masuk kategori/sudah kuliah",
            $this->umur === 17 => "Kelas 12",
            $this->umur === 16 => "Kelas 11",
            $this->umur === 15 => "Kelas 10",
            default => "masih SMP"
        };
    }

    public function sapa(): string {
        $kelas = $this->getKelas();
        return "\nHalo, nama saya $this->nama yang berumur $this->umur, sekarang $kelas.";
    }
}
