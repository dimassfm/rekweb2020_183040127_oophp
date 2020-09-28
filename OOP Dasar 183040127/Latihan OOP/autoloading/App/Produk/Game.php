<?php 


class Game extends Produk implements InfoProduk{

	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0){
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}

	// public function getHarga(){
	// 	return $this->harga;
	// }

	public function getInfo () { //komik dan game merupakan child dari produk
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		// if( $this->tipe == "Komik"){
		// 	$str .= " - {$this->jmlHalaman} Halaman.";
		// } else if($this->tipe == "Game"){
		// 	$str .= " ~ {$this->waktuMain} Jam.";
		// }

		return $str;
	}

	public function getInfoProduk(){
		$str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
		return $str;
	}
}