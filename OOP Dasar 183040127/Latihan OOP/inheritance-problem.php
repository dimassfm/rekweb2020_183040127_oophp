<?php 

// jualan produk
// 1. komik
// 2. game

class Produk{
	public $judul = "judul";
	public $penulis = "penulis";
	public $penerbit = "penerbit";
	public $harga = 0;
	public $jmlHalaman;
	public $waktuMain;
	public $tipe;

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function __construct( $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe ){ 
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->waktuMain = $waktuMain;
		$this->tipe = $tipe;
	}

	public function getInfoLengkap(){
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		if( $this->tipe == "Komik"){
			$str .= " - {$this->jmlHalaman} Halaman.";
		} else if($this->tipe == "Game"){
			$str .= " ~ {$this->waktuMain} Jam.";
		}

		return $str;
	}

}

class CetakInfoProduk{// semua dicetak gapeduli, dan cuma punya 1 method
	public function cetak( Produk$produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}

}


echo "<br>";

$produk1 = new Produk("naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");


echo "<br>";

echo "<hr>";

$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "game : " . $produk2->getLabel();
echo "<br>";
echo "<br>";
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

// komik : Masashi Kishimoto, Shonen Jump
// Game : Neil Druckman, Sony Computer
// Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000)

// komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman
// Game : Uncharted | Neil Druckman, Sony Computer (Rp. 250000) ~ 50 jam

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

 ?>
