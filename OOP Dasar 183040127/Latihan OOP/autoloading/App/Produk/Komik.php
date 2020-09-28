<?php 

class Komik extends Produk implements InfoProduk{
	public $jmlHalaman;

	public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

	
	public function getInfoProduk(){
		$str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
		return $str;
	}

	public function getInfo () { //komik dan game merupakan child dari produk
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		return $str;
	}

}
?>