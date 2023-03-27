<?php
//Lelinta Br Perangin Angin
$no1 = $_POST['txtbil1'];
$no2 = $_POST['txtbil2'];

echo" Bilangan 1 =" .$no1. "<br>";
echo" Bilangan 2 =" .$no2. "<br>";

$tambah = $no1 + $no2 ; 
echo " Hasil Tambah = ".$tambah. "<br>" ;
//kurang



$kurang = $no1 - $no2 ; 
echo " Hasil Kurang = ".$kurang. "<br>";
//kali


$kali = $no1 * $no2 ; 
echo " Hasil Kali = ".$kali. "<br>";
//bagi


$bagi = $no1 / $no2 ; 
echo " Hasil Bagi = ".$bagi. "<br>";
?>