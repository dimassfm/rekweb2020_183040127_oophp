<?php 

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