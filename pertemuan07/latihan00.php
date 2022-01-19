<?php 

$x=10;
function tampilX(){
	$x=20;
	global $x;
	echo $x, "<br>";
}
// nilai berapakah yg akan tampil ??
tampilX();

// superglobals
// merupakan variabel global milik php
// merupakan ARRAY ASOSIATIF
// $_GET, $_POST, $_REQUEST, $_SESSION, $_COOKIE, $_SERVER, $_ENV

// cara input data ke array asosiatif
$_GET["nama"] = "Tanzilal Gummilang";
$_GET["umur"] = "22 tahun";
print_r($_GET);

?>