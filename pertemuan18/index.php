<?php 

session_start();

if ( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'function.php';

// pagination
$jml_data_tampil_perhal = 10;
$jml_data = count(tampil("SELECT * FROM tbl_pemain"));
$jml_hal = ceil($jml_data / $jml_data_tampil_perhal);
$hal_aktif = ( isset($_GET["hal"]) ) ? $_GET["hal"] : 1;
// hal 1 = index ke-01234 
// hal 2 = index ke-56789 dst..
$limit = ( $jml_data_tampil_perhal * $hal_aktif ) - $jml_data_tampil_perhal;

// menampilkan tbl_pemain dgn pagination
$players = tampil("SELECT * FROM tbl_pemain LIMIT $limit, $jml_data_tampil_perhal");


// button cari ditekan
if ( isset($_POST["cari"]) ) {
	$players = cari($_POST["keyword"]);
	// $players = mysqli_query("SELECT * FROM tbl_pemain LIMIT $limit, $jml_data_tampil_perhal");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Pemain</h1>

<a href="logout.php" onclick="return confirm('yakin ingin logout ?')">Logout</a>
<br><br>

<a href="tambah.php">Tambah Data Pemain</a>
<br><br>

<!-- input cari -->
<form action="" method="post">
	<input type="text" name="keyword" placeholder="masukan keyword pencarian..." size="50" autofocus autocomplete="off">
	<button type="submit" name="cari">Cari</button>
</form>
<br>


<!-- navigasi hal -->
<?php if( $hal_aktif > 1 ) : ?>
	<a href="?hal=1">first</a>
<?php endif; ?>

<?php if( $hal_aktif > 1 ) : ?>
	<a href="?hal=<?= $hal_aktif - 1 ?>">&laquo;</a>
<?php endif; ?>

<?php for( $i=1; $i<=$jml_hal; $i++ ) : ?>
	<?php if( $i == $hal_aktif ) : ?>
		<a href="?hal=<?= $i; ?>" style="color:red; font-weight:bold;"> <?= $i; ?> </a>
	<?php else : ?>
		<a href="?hal=<?= $i; ?>"> <?= $i; ?> </a>		
	<?php endif; ?>
<?php endfor; ?>

<?php if( $hal_aktif < $jml_hal ) : ?>
	<a href="?hal=<?= $hal_aktif + 1 ?>">&raquo;</a>
<?php endif; ?>

<?php if( $hal_aktif < $jml_hal ) : ?>
	<a href="?hal=<?= $jml_hal; ?>">last</a>
<?php endif; ?>
<!-- akhir navigasi hal -->


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
	<?php $i=1+$limit; ?>
	<?php foreach( $players as $player ) : ?>

	<tr>
		<td><?= $i++; ?></td>
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

	<?php endforeach; ?>
	<!-- akhir looping -->

</table>
<!-- akhir tabel -->
<br><br><br><br><br>

</body>
</html>