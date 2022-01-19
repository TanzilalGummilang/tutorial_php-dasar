<?php
	$mahasiswa = [
		[ 
			"nama" => "Tanzilal Gummilang",
			"npm" => "17304073",
			"email" => "tz.ehehe@gmail.com",
			"jurusan" => "Teknik Informatika",
			"gambar" => "tz.jpg"
		],
		[ 
			"nama" => "Mason Mount",
			"npm" => "17305074",
			"email" => "masonmount@gmail.com",
			"jurusan" => "Teknik Mesin",
			"gambar" => "mount.jpg"
		]
	];
?>

<!DOCTYPE html>
<html>
<head>
 	<title>latihan 02</title>
</head>
<body>
	
<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs1 ) : ?>
	<ul>
 		<li> 
 			<a href="latihan02.php
 				?nama=<?= $mhs1["nama"]; ?>
 				&npm=<?= $mhs1["npm"]; ?>
 				&email=<?= $mhs1["email"]; ?>
 				&jurusan=<?= $mhs1["jurusan"]; ?>
 				&gambar=<?= $mhs1["gambar"]; ?>
 			"> 
 				<?= $mhs1 ["nama"]; ?>
 				<?= $mhs1 ["npm"]; ?>
 			</a>
 		</li>
 	</ul>
<?php endforeach; ?>

</body>
</html>