<?php 

// jualan produk
// 1. komik
// 2. game

abstract class Produk{
	private $judul = "judul";
	private $penulis = "penulis";
	private $penerbit = "penerbit";
	protected $diskon = 0;
	private $harga = 0;
	



	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}

	public function __construct( $judul, $penulis, $penerbit, $harga){ 
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		
	
	}

	public function setJudul($judul){
		// if( !is_string($judul)){
		// 	throw new Exception("Judul harus huruf");
			// pake ini biar lebih spesifik
		// }
		$this->judul = $judul;
	}

	public function getJudul(){//buat ambil judul
		return $this->judul;
	}

	public function setPenulis(){
		$this->penulis = $penulis;
	}

	public function getPenulis(){
		return $this->penulis;
	}

	public function setPenerbit(){
		$this->penerbit = $penerbit;
	}

	public function getPenerbit(){
		return $this->penerbit;
	}

	public function setHarga(){
		$this->harga = $harga;
	}//ini adalah harga setelah diskon


	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}

	public function getHarga(){
	 	return $this->harga - ( $this->harga * $this->diskon / 100);
	 }

	abstract public function getInfoProduk();

	public function getInfo () { //komik dan game merupakan child dari produk
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
	public $daftarProduk = array();

	public function tambahProduk( Produk $produk){
		$this->daftarProduk[] = $produk;
	}


	public function cetak(  ){
		$str = "DAFTAR PRODUK : <br>";

		foreach( $this->daftarProduk as $p){
			$str .= " - {$p->getInfoProduk()} <br>";
		}
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
		$str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk{

	public $waktuMain;

	public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain){
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}

	// public function getHarga(){
	// 	return $this->harga;
	// }

	public function getInfoProduk(){
		$str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
		return $str;
	}
}

// echo "<br>";

$produk1 = new Komik("naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);


// echo "<br>";

// echo "<hr>";

$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

// echo "Komik : " . $produk1->getLabel();
// echo "<br>";
// echo "game : " . $produk2->getLabel();
// echo "<br>";
// echo "<br>";
// echo $produk1->getInfoProduk();
// echo "<br>";
// echo $produk2->getInfoProduk();

// komik : Masashi Kishimoto, Shonen Jump
// Game : Neil Druckman, Sony Computer
// Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000)

// komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman
// Game : Uncharted | Neil Druckman, Sony Computer (Rp. 250000) ~ 50 jam

// $infoProduk1 = new CetakInfoProduk();
// echo $infoProduk1->cetak($produk1);

// echo "<hr>";


// // $produk2->harga = 5000;
// // $produk2->diskon = 90;
// $produk2->setDiskon(50);
// // $produk1->setDiskon(80);
// echo $produk2->getHarga();
// echo "<hr>";

// // $produk3 = new Produk("BarangBaru");
// // echo $produk3->judul;

// $produk1->setJudul("spongebob1"); 
// echo $produk1->getJudul();
// echo "<hr>";

// $produk1->setJudul("spongebob2");
// echo $produk1->getJudul();




$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();


 ?>