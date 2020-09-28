<?php 

// jualan produk
// 1. komik
// 2. game

class Produk{
	public $judul = "judul";
	public $penulis = "penulis";
	public $penerbit = "penerbit";
	public $harga = 0;
// nilai default nya boleh di sontructor

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function __construct( $judul, $penulis, $penerbit, $harga ){ //method nya ototmatis berjalan kalo ada produk baru
		// echo "hello world";
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

}

class CetakInfoProduk{// semua dicetak gapeduli, dan cuma punya 1 method
	public function cetak( Produk $produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}

}


echo "<br>";

$produk1 = new Produk("naruto", "Masashi Kishimoto", "Shonen Jump", 30000);


echo "<br>";

echo "<hr>";

$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

 ?>