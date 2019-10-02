<?php 

	// define('NAMA', 'Rima RN');
	// echo NAMA;

	// echo "<br>";

	// bisa dipake di dalam class
	// const UMUR = 19;
	// echo UMUR;

// class Coba{
// 	const NAMA = 'RimaRN';
// }

// echo Coba::NAMA;

// echo __LINE__;

// function coba(){
// 	return __FUNCTION__;
// }

// echo coba();

class Coba{
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;

 ?>