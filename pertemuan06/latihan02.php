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
			"gambar" => "mason mount.jpg"
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
		<img src="foto/<?= $mhs1 ["gambar"]; ?>">
 		<li> <?= $mhs1 ["nama"]; ?> </li>
 		<li> <?= $mhs1 ["npm"]; ?> </li>
 		<li> <?= $mhs1 ["email"]; ?> </li>
 		<li> <?= $mhs1 ["jurusan"]; ?> </li>
 	</ul>
<?php endforeach; ?>

</body>
</html>