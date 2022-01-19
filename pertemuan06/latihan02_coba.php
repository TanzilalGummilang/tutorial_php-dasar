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

 	<?php foreach( $mahasiswa as $mhs1 ) : ?>
 		<?php foreach( $mhs1 as $mhs2 ) : ?>
 			<div> <?= $mhs2; ?> </div>
 		<?php endforeach; ?>
 		<br>
 	<?php endforeach; ?>
 
 </body>
 </html>