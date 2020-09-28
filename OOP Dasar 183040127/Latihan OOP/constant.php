<?php 

// define('NAMA', 'Dimas Faturohman'); //bisa disimpan di dalam kelas

// echo NAMA;

// echo "<br>";
// //cara ke-2

// const UMUR = 23;// bisa dipake di OOP
// echo UMUR;


 // class Coba{
 // 	const NAMA = 'Dimas Faturohman';
 // }

 // echo Coba::NAMA;
 // echo "<hr>";

//magic constant
 //__LINE__ untuk mengetahui urutan barisnya ada di baris berapa
 //__FILE__ alamat file ini ada dimana
 //__DIR__
 //__FUNCTION__
 //__CLASS__
 //__TRAIT__
 //__METHOD__
 //__NAMESPACE__

//  echo __LINE__;
//  echo "<br>";
//  echo __FILE__;
//  echo "<br>";

//  function coba(){
//  	return __FUNCTION__;
//  }

// echo coba();
// echo "<br>";

class Coba{
	public $kelas = __CLASS__;
}


$obj = new Coba;
echo $obj->kelas;


 ?>