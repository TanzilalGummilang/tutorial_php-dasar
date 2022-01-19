<?php 
	$mahasiswa = [
		["Tanzilal Gummilang", "17304073", "Teknik Informatika", "tanzilalgummilang@gmail.com"],
		["Otong Surotong", "17304074", "Teknik Mesin", "tongtong@gmail.com"],
		["Ucup Surucup", "17304076", "Teknik Elektronika", "cupcup@gmail.com"]
	];
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>daftar mahasiswa</title>
 </head>
 <body>

 	<h1>Daftar Mahasiswa</h1>

 	<ul>
 		<?php foreach ($mahasiswa as $mhs) : ?>
 			<li>nama	: <?= $mhs[0]; ?> </li>
 			<li>npm		: <?= $mhs[1]; ?> </li>
 			<li>jurusan	: <?= $mhs[2]; ?> </li>
 			<li>email	: <?= $mhs[3]; ?> </li>
 			<?= "<br>"; ?>
 		<?php endforeach; ?>
 	</ul>
 
 </body>
 </html>