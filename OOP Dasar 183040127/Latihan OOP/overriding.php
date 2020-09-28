<?php 

// jualan produk
// 1. komik
// 2. game

class Produk{
	public $judul = "judul";
	public $penulis = "penulis";
	public $penerbit = "penerbit";
	public $harga = 0;
	



	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function __construct( $judul, $penulis, $penerbit, $harga){ 
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		
	
	}

	public function getInfoProduk(){ //komik dan game merupakan child dari produk
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		// if( $this->tipe == "Komik"){
		// 	$str .= " - {$this->jmlHalaman} Halaman.";
		// } else if($this->tipe == "Game"){
		// 	$str .= " ~ {$this->waktuMain} Jam.";
		// }

		return $str;
	}

}

class CetakInfoProduk{// semua dicetak gapeduli, dan cuma punya 1 method
	public function cetak( Produk$produk ){
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}

}

class Komik extends Produk{
	public $jmlHalaman;

	public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;

	}

	public function getInfoProduk(){
		$str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk{

	public $waktuMain;

	public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain){
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function getInfoProduk(){
		$str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
		return $str;
	}
}

echo "<br>";

$produk1 = new Komik("naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);


echo "<br>";

echo "<hr>";

$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

// echo "Komik : " . $produk1->getLabel();
// echo "<br>";
// echo "game : " . $produk2->getLabel();
echo "<br>";
echo "<br>";
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

// komik : Masashi Kishimoto, Shonen Jump
// Game : Neil Druckman, Sony Computer
// Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000)

// komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman
// Game : Uncharted | Neil Druckman, Sony Computer (Rp. 250000) ~ 50 jam

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

 ?>