<?php 
	/*
		pertemuan ke-2 - PHP dasar

		- sintaks PHP
		- standar output
			1. echo, print
			2. print_r
			3. var_dump
	*/

	echo "aing macan <br>";

	/*
		- penulisan sintaks PHP
			1. PHP di dalam HTML
			2. HTML di dalam PHP (tidak disarankan)
	*/

	// variabel dan tipe data
	// variabel

	$nama = "antonio";
	echo "halo nama saya $nama <br>";

	// operator matematika
	// +-*/%

	echo 2+2; echo "<br>";
	$a = 5; $b = 6;
	$c = $a * $b;
	echo "$a * $b = $c <br>";

	// penggabung string (concatenation)

	$nama_depan = "tanzilal";
	$nama_belakang = "gummilang";
	echo $nama_depan . " " . $nama_belakang . "<br>";

	// assignment
	// += -= *= /= %= .=

	$a = 2;
	$a += 4;
	echo $a; echo "<br>";
	$ngaran = "otong";
	$ngaran .= " ";
	$ngaran .= "surotong";
	echo $ngaran; echo "<br>";

	// perbandingan
	// <, >, <=, >=, ==, !=

	var_dump(1 == "1"); // ngecek nilainya saja
	echo "<br>";

	// identitas
	// ===, !==

	var_dump(1 === "1");
	echo "<br>";

	// logika
	// && || !

	$x = 30;
	var_dump($x < 20 && $x % 2 == 0);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>belajar php</title>
 </head>
 <body>
 	<h1> salam sejahtera <?php echo $nama; ?> </h1>
 </body>
 </html>