<?php

class Kendaraan {
	public string $name;
	protected string $warna;
	private string $platNomor;

	public function __construct(string $name, string $warna, string $platNomor)
	{
		$this->name = $name;
		$this->warna = $warna;
		$this->platNomor = $platNomor;
	}

	public function info() {
		return "Kendaraan $this->name, Warna $this->warna, dengan plat nomor $this->platNomor";
	}

	public function getPlatNumber() {
		return $this->platNomor;
	}

	protected function cekKondisi() {
		return "Mobil dalam keadaan baik";
	}

	public function tampilkanKondisi() {
		return $this->cekKondisi();
	}
}
