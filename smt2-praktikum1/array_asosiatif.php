<?php 

//mirip dictionari di python//

$angka = [1,2,3,4,5];

$mhs = [
    "nama" => "putri patresia",
    "usia" => 19, 
    "domisili" => "bogor"
];

echo $mhs["nama"]."<br/>";
foreach ($mhs as $key => $value){
    echo $key . " : " . $value . "<br>";
}






?>