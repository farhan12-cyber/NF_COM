<?php
// memanggil file atau class_lingkaran.php
require_once "class_Lingkaran.php";
require_once "class_Persegipanjang.php";
require_once "class_Segitiga.php";
$lingkar1 = new Lingkaran(10);
$lingkar2 = new Lingkaran(4);
$persegi1 = new Persegipanjang(5,3);
$persegi2 = new Persegipanjang(10,5);
$Segitiga1 = new Segitiga();
$Segitiga2 = new Segitiga();
// menghitung menggunakan fungsi getluas
// echo "<br/> Luas lingkaran I adalah = " . $lingkar1->getLuas();
echo "<br/> Luas lingkaran adalah =  " . $lingkar2->getLuas();
echo "<br/>";
// menghitung menggunakan fungsi get keliling
echo "<br/>Keliling lingkaran adalah = ".$lingkar1->getKeliling();
// echo "<br/>Keliling lingkaran II adalah = " . $lingkar2->getKeliling();
// menghitung menggunakan fungsi getluas
// echo "<br/> Luas Persegi Panjang I adalah = " . $persegi1->getLuas();
echo "<br/>";
echo "<br/> Luas Persegi Panjang adalah =  " . $persegi2->getLuas();
echo "<br/>";
// menghitung menggunakan fungsi get keliling
// echo "<br/>Keliling Persegi Panjang I adalah = ".$persegi1->getKeliling();
echo "<br/>Keliling Persegi Panjang adalah = " . $persegi2->getKeliling();
echo "<br/>";
echo "<br/> Luas Segitiga adalah =  " . $Segitiga1->getLuas(10,2);
echo "<br/>";
echo "<br/>Keliling segitiga adalah = " . $Segitiga2->getKeliling(10,10,10);
?>