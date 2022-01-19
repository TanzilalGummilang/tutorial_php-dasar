<?php 
	function salam($nama="admin"){

		// timezone jakarta
		date_default_timezone_set("Asia/Jakarta");

		// jam dan menit
		$jam = date('H:i');

		// atur waktu
		if ($jam > '03:00' && $jam < '10:00') {
			$waktu = 'Pagi';
		} elseif ($jam > '10:00' && $jam < '15:00') {
			$waktu = 'Siang';
		} elseif ($jam <= '18:00') {
			$waktu = 'Sore';
		} else {
			$waktu = 'Malam';
		}

		return "Selamat $waktu $nama";
	}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>function</title>
 </head>
 <body>
 	<h1> <?= salam("anjin*"); ?> </h1>
 </body>
 </html>