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

// $produk1 = new Produk();
// $produk1->judul = "boruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "testproperty";
// var_dump($produk2);

echo "<br>";

$produk1 = new Produk("naruto", "Masashi Kishimoto", "Shonen Jump", 30000);


echo "<br>";

echo "<hr>";

$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "game : " . $produk2->getLabel();

//consctructor, merupakan method khusus yang ada didalam sebuah kelas, kenapa spesial? karena dia otomatis dijalankan ketika di instansiasi.



 ?>