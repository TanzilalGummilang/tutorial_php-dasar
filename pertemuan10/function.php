<?php 

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "db_chelsea");


// menampilkan isi database ke index.php
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];

	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;
}


// function tambah
function tambah($tambah){
	global $conn;

	// ambil data dari tiap elemen dalam form
	$kode_pemain = htmlspecialchars($tambah["kode_pemain"]);
	$nama = htmlspecialchars($tambah["nama"]);
	$posisi = htmlspecialchars($tambah["posisi"]);
	$gambar = htmlspecialchars($tambah["gambar"]);
	$no_punggung = htmlspecialchars($tambah["no_punggung"]);

	// masukan data ke database
	$query_tambah =	"INSERT INTO tbl_pemain VALUES
					('$kode_pemain', '$nama', '$posisi', '$gambar', '$no_punggung')
					";
	mysqli_query($conn, $query_tambah);

	// mengembalikan angka <0 (jika gagal), >0 (jika berhasil)
	return mysqli_affected_rows($conn);
}


// function hapus
function hapus($kode_pemain){
	global $conn;
	mysqli_query($conn, "DELETE FROM tbl_pemain WHERE kode_pemain = '$kode_pemain'");
	return mysqli_affected_rows($conn);
}

?>