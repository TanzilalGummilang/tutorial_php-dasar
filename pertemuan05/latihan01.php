<?php 
// array
// variabel yg dpt memiliki/menampung banyak nilai
// elemen pd array boleh memiliki tipedata yg berbeda-beda
// pasangan key dgn value
// key nya adalah index yg dimulai dari 0

// membuat array
// cara lama
$hari = array("senin", "selasa", "rabu");

// cara baru
$bulan = ["januari", "februari", "maret"];
$arr1 = [123, "tulisan", false];

// menampilkan array
// var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

// Menampilkan 1 elemen pd array
echo $arr1[0];
echo "<br>";
echo $bulan[1];
echo "<br>";

// menambahkan elemen baru pd array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);
?>