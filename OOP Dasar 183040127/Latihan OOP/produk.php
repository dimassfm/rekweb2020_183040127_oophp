<?php 

// jualan produk
// 1. komik
// 2. game

class Produk{
	public $judul = "judul";
	public $penulis = "penulis";
	public $penerbit = "penerbit";
	public $harga = 0;

	//method merupaka function yang ada didalem kelas
	public function sayHello(){
		return "Hello World";
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

// $produk1 = new Produk();
// $produk1->judul = "boruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "testproperty";
// var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;
var_dump($produk3);

echo "komik : $produk3->penulis, $produk3->penerbit";
echo "<br>";
echo $produk3->getLabel();

echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "game : " . $produk4->getLabel();
 ?>