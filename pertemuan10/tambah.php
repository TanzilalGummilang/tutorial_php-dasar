<?php 

require 'function.php';

// cek apakah tombol submit sudah ditekan
if( isset($_POST["submit"]) ) {
	
	
	// cek apakah data berhasil dimasukan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "data berhasil ditambahkan";
		/*echo "
			<script>
				alert('data berhasil ditambahkan');
				document.location.href = 'index.php';
			</script>
		";*/
	} else {
		echo "gagal !!";
		/*echo "
			<script>
				alert('data gagal ditambahkan !!');
				document.location.href = 'index.php';
			</script>
		";*/
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Pemain</title>
</head>
<body>

<h1>Tambah Data Pemain</h1>
<a href="index.php">Kembali Ke Halaman Admin</a>

<!-- awal form -->
<form action="" method="post">

	<ul>
		<li>
			<label for="kode_pemain">Kode Pemain: </label>
			<input type="text" name="kode_pemain" id="kode_pemain" required="">
		</li>
		<li>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" id="nama" required="">
		</li>
		<li>
			<label for="posisi">Posisi: </label>
			<input type="text" name="posisi" id="posisi" required="">
		</li>
		<li>
			<label for="gambar">Gambar: </label>
			<input type="text" name="gambar" id="gambar" required="">
		</li>
		<li>
			<label for="no_punggung">No Punggung: </label>
			<input type="text" name="no_punggung" id="no_punggung" required="">
		</li>
		<button type="submit" name="submit">Tambah Data</button>
	</ul>

</form>
<!-- akhir form -->

</body>
</html>