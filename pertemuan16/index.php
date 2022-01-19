<?php 

session_start();

if ( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}


require 'function.php';

// menampilkan tbl_pemain
$players = tampil("SELECT * FROM tbl_pemain");

// button cari ditekan
if ( isset($_POST["cari"]) ) {
	$players = cari($_POST["keyword"]);
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Pemain</h1>

<a href="logout.php">Logout</a>
<br><br>

<a href="tambah.php">Tambah Data Pemain</a>
<br><br>

<!-- input searching -->
<form action="" method="post">
	<input type="text" name="keyword" placeholder="masukan keyword pencarian..." size="50" autofocus autocomplete="off">
	<button type="submit" name="cari">Cari</button>
</form>
<br>

<!-- awal tabel -->
<table border="1" cellpadding="10" cellspacing="0">

	<!-- fieldnya -->
	<tr>
		<th></th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>Kode Pemain</th>
		<th>Nama</th>
		<th>Posisi</th>
		<th>No Punggung</th>
	</tr>

	<!-- awallooping per recordnya -->
	<?php $i=1; ?>
	<?php foreach( $players as $player ) : ?>

	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="edit.php?kode_pemain=<?= $player["kode_pemain"]; ?>">edit |</a>
			<a href="hapus.php?kode_pemain=<?= $player["kode_pemain"]; ?>" onclick="return confirm('yakin dihapus?');">hapus</a>
		</td>
		<td align="center"><img src="../img/<?= $player["gambar"]; ?>" height="50" ></td>
		<td align="center"><?= $player["kode_pemain"]; ?></td>
		<td><?= $player["nama"]; ?></td>
		<td><?= $player["posisi"]; ?></td>
		<td align="center"><?= $player["no_punggung"]; ?></td>
	</tr>

	<?php $i++; ?>
	<?php endforeach; ?>
	<!-- akhir looping -->

</table>
<!-- akhir tabel -->

</body>
</html>