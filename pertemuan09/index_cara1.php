<?php 
// koneksi ke database
// mysql, msqli, pdo (php data object)
// mysqli_connect("nama_host", "username_mysqlnya", "passwordnya", "nama_db");
$conn = mysqli_connect("localhost", "root", "", "db_chelsea");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM tbl_pemain");
// deteksi error
if( !$result ){
	echo mysqli_error($conn);
}

/*
ambil data (fetch) dari object result
- mysqli_fetch_row(); mengembalikan array numeric
- mysqli_fetch_assoc(); mengembalikan array associate
- mysqli_fetch_array(); array keduanya
- mysqli_fetch_object(); 
- 	while( $pemain = mysqli_fetch_assoc($result) ){
		var_dump($pemain);
	};
*/

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Pemain</h1>

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
	<?php while( $row = mysqli_fetch_assoc($result) ) : ?>

	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="">edit |</a>
			<a href="">hapus</a>
		</td>
		<td><img src="../img/<?= $row["gambar"]; ?>" height="50" ></td>
		<td><?= $row["kode_pemain"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["posisi"]; ?></td>
		<td><?= $row["no_punggung"]; ?></td>
	</tr>

	<?php $i++; ?>
	<?php endwhile; ?>

</table>

</body>
</html>