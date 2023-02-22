<?php 

// variable user //
$nama = "putri patresia";
$usia = 19;
$negara = "indonesia";



//echo "nama saya $nama usia saya $usia tahun, dan saya berasal dari $negara";//
echo "<br/>";
echo "nama saya " .$nama. " usia saya " .$usia. " dan saya berasal dari " .$negara;
echo "<br/>";

//variable sistem //
echo "dokumen root :".$_SERVER["DOCUMENT_ROOT"]."<br>";
echo "dokumen file :".$_SERVER["PHP_SELF"];
echo "<br/>";


//konstanta//
define ("phi",3.14);
$radius = 10;
$luas = phi * $radius * $radius;
$kllg = 2 * phi * $radius ;

echo "luas lingkaran dengan jari jari ".$radius. " adalah " .$luas;
echo "<br/> sedangakan kelilingnya adlah ". $kllg;





?>