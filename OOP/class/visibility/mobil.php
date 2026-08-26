<?php

require_once 'kendaraan.php';

class Mobil extends Kendaraan
{
	public function infoMobil()
	{
		$name = $this->name;
		$warna = $this->warna;
		return "Mobil $name, berwarna $warna";
	}

	public function cekMobil()
	{
		return $this->cekKondisi();
	}

	public function cekKondisi() {
		$warna = $this->warna;
		return $warna == "Hijau" ? "Mobil dalam keadaan baik" : "Mobil dalam keadaan rusak";
	}
}
