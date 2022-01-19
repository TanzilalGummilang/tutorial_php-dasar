<?php
// meminta hubungan ke file function.php dan querynya
require 'function.php';
$players = query("SELECT * FROM tbl_pemain");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Pemain</h1>

<!-- awal tabel -->
<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th></th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>Kode Pemain</th>
		<th>Nama</th>
		<th>Posisi</th>
		<th>No Punggung</th>
	</tr>

	<?php $i=1; ?>
	<?php foreach( $players as $player ) : ?>

	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="">edit |</a>
			<a href="">hapus</a>
		</td>
		<td><img src="../img/<?= $player["gambar"]; ?>" height="50" ></td>
		<td><?= $player["kode_pemain"]; ?></td>
		<td><?= $player["nama"]; ?></td>
		<td><?= $player["posisi"]; ?></td>
		<td><?= $player["no_punggung"]; ?></td>
	</tr>

	<?php $i++; ?>
	<?php endforeach; ?>

</table>
<!-- akhir tabel -->

</body>
</html>