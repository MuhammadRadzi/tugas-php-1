<?php

namespace App;

class Buku {
    public function __construct(
        public string $judul,
        public int $stok
    )
    {}

    public function info() {
        return "$this->judul (stok: $this->stok)";
    }
}