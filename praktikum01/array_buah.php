<?php
//membuat array
$arrayBuah = ["Apel","Jeruk","Melon","Sirsak","Jambu"];

//cara pertama
print_r ($arrayBuah);
echo "<br>";
//cara kedua
var_dump($arrayBuah);
echo "<br>";
//cara keitga
foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}