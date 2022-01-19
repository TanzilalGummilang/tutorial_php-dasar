<?php 

require 'function.php';

// ambil dari URL (harus $_GET)
$kode_pemain = $_GET["kode_pemain"];

// query tampilkan pemain berdasarkan kode_pemain
$player = tampil("SELECT * FROM tbl_pemain WHERE kode_pemain = '$kode_pemain'")[0];

// cek apakah tombol submit sudah ditekan
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( edit($_POST) > 0 ) {
		echo "data berhasil diubah";
		/*echo "
			<script>
				alert('data berhasil diubah');
				document.location.href = 'index.php';
			</script>
		";*/
	} else {
		echo "data gagal diubah !!";
		/*echo "
			<script>
				alert('data gagal diubah !!');
				document.location.href = 'index.php';
			</script>
		";*/
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Pemain</title>
</head>
<body>

<h1>Ubah Data Pemain</h1>
<a href="index.php">Kembali Ke Halaman Admin</a>

<!-- awal form -->
<form action="" method="post">

	<ul>
		<li>
			<label for="kode_pemain">Kode Pemain: </label>
			<input type="text" name="kode_pemain" id="kode_pemain" required=""
			value="<?= $player["kode_pemain"]; ?>" readonly>
		</li>
		<li>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" id="nama" required=""
			value="<?= $player["nama"]; ?>">
		</li>
		<li>
			<label for="posisi">Posisi: </label>
			<input type="text" name="posisi" id="posisi" required=""
			value="<?= $player["posisi"]; ?>">
		</li>
		<li>
			<label for="gambar">Gambar: </label>
			<input type="text" name="gambar" id="gambar" required=""
			value="<?= $player["gambar"]; ?>">
		</li>
		<li>
			<label for="no_punggung">No Punggung: </label>
			<input type="text" name="no_punggung" id="no_punggung" required=""
			value="<?= $player["no_punggung"]; ?>">
		</li>
		<button type="submit" name="submit">Ubah Data</button>
	</ul>

</form>
<!-- akhir form -->

</body>
</html>