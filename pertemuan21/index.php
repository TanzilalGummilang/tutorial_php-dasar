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
	<style>
		.loader{
			width: 40px;
			position: absolute;
			top: 142px;
			left: 400px;
			z-index: -1;
			display: none;
		}

		@media print {
			.logout, .tambah, .cari, .aksi {
				display: none;
			}
		}
	</style>

	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/script.js"></script>
</head>
<body>

<h1>Daftar Pemain</h1>

<a href="logout.php" onclick="return confirm('yakin ingin logout ?')" class="logout">Logout</a>
<br><br>

<a href="tambah.php" class="tambah">Tambah Data Pemain</a>
<br><br>

<!-- input cari -->
<form action="" method="post" class="cari">
	<input type="text" name="keyword" placeholder="masukan keyword pencarian..." size="50" autofocus autocomplete="off" id="keyword">
	<button type="submit" name="cari" id="tombol_cari">Cari</button>
	<img src="../img/loader.gif" class="loader">
</form>
<br>
<!-- akhir input cari -->

<!-- tabel -->
<div id="container">
<table border="1" cellpadding="10" cellspacing="0">

	<!-- fieldnya -->
	<tr>
		<th></th>
		<th class="aksi">Aksi</th>
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
		<td class="aksi">
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
</div>
<!-- akhir tabel -->


</body>
</html>