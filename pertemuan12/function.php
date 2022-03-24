<?php 

// koneksi ke database db_chelsea
$conn = mysqli_connect("localhost", "root", "", "db_wpu_php_dasar");


// menampilkan isi database ke index.php
function tampil($tampil){
	global $conn;
	$result = mysqli_query($conn, $tampil);
	$rows = [];

	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;
}


// function tambah per record ke db
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


// function hapus per record ke db
function hapus($kode_pemain){
	global $conn;
	mysqli_query($conn, "DELETE FROM tbl_pemain WHERE kode_pemain = '$kode_pemain'");
	return mysqli_affected_rows($conn);
}


// function edit per record ke db
function edit($edit){
	global $conn;

	// ambil data dari tiap elemen dalam form
	$kode_pemain = htmlspecialchars($edit["kode_pemain"]);
	$nama = htmlspecialchars($edit["nama"]);
	$posisi = htmlspecialchars($edit["posisi"]);
	$gambar = htmlspecialchars($edit["gambar"]);
	$no_punggung = htmlspecialchars($edit["no_punggung"]);

	// masukan data ke database
	$query_edit =	"UPDATE tbl_pemain SET
					nama = '$nama',
					posisi = '$posisi',
					gambar = '$gambar',
					no_punggung = '$no_punggung'
					WHERE kode_pemain = '$kode_pemain'
					";
	mysqli_query($conn, $query_edit);

	// mengembalikan angka <0 (jika gagal), >0 (jika berhasil)
	return mysqli_affected_rows($conn);
}


function cari($keyword){
	$query_cari = 	"SELECT * FROM tbl_pemain WHERE
					kode_pemain LIKE '%$keyword%' OR
					nama LIKE '%$keyword%' OR
					posisi LIKE '%$keyword%' OR
					no_punggung LIKE '%$keyword%'
					";
	return tampil($query_cari);
}

?>