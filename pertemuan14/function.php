<?php 

// koneksi ke database db_chelsea
$conn = mysqli_connect("localhost", "root", "", "db_chelsea");


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
	$no_punggung = htmlspecialchars($tambah["no_punggung"]);
	
	// upload gambar
	$gambar = upload_gambar();
	if ( !$gambar ) {
		return false;
	}

	// masukan data ke database
	$query_tambah =	"INSERT INTO tbl_pemain VALUES
					('$kode_pemain', '$nama', '$posisi', '$gambar', '$no_punggung')
					";
	mysqli_query($conn, $query_tambah);

	// mengembalikan angka <0 (jika gagal), >0 (jika berhasil)
	return mysqli_affected_rows($conn);
}


// function upload gambar
function upload_gambar(){

	// ambil data dari $_FILES
	$nama_file = $_FILES["gambar"]["name"];
	$ukuran_file = $_FILES["gambar"]["size"];
	$error_file = $_FILES["gambar"]["error"];
	$tmp_name = $_FILES["gambar"]["tmp_name"];

	// cek apakah tidak ada gambar yg di upload
	if ( $error_file === 4 ) {
		echo 	"<script>
					alert('pilih gambar terlebih dahulu !');
				</script>";
		return false;
	}

	// cek apakah yg di upload gambar atau bukan
	$ekstensi_gambar_valid = ["jpg", "jpeg", "png"];
	
	// // memecah $nama_file
	$ekstensi_gambar = explode(".", $nama_file);

	// // ambil array yg terakhir dari $nama_file tsb
	$ekstensi_gambar = strtolower(end($ekstensi_gambar));

	// // cek apa termasuk ke $ekstensi_gambar_valid
	if ( !in_array($ekstensi_gambar, $ekstensi_gambar_valid) ) {
		echo 	"<script>
					alert('harap masukan file dengan ekstensi jpg, jpeg, png !');
				</script>";
		return false;
	}

	// cek ukuran gambar (dalam byte)
	if ( $ukuran_file > 1000000 ) {
		echo 	"<script>
					alert('jangan upload ukuran file melebihi 1MB !');
				</script>";
		return false;
	}

	// generate nama gambar baru
	$nama_file_baru = uniqid();
	$nama_file_baru .= '.';
	$nama_file_baru .= $ekstensi_gambar;

	// lolos pengecekan, gambar siap di upload
	move_uploaded_file($tmp_name, '../img/'.$nama_file_baru);
	return $nama_file_baru;

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
	$no_punggung = htmlspecialchars($edit["no_punggung"]);
	$gambar_lama = htmlspecialchars($edit["gambar_lama"]);

	// cek apakah ada file foto yg di upload atau tidak
	if ( $_FILES["gambar"]["error"] === 4 ) {
		$gambar = $gambar_lama;
	} else {
		$gambar = upload_gambar();
	}

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


// function registrasi
function registrasi($registrasi){
	global $conn;

	$username = htmlspecialchars(strtolower(stripslashes($registrasi["username"])));
	$password = htmlspecialchars(mysqli_real_escape_string($conn, $registrasi["password"]));
	$password2 = htmlspecialchars(mysqli_real_escape_string($conn, $registrasi["password2"]));

	// cek redudansi username
	$redudansi = mysqli_query($conn, "SELECT username FROM tbl_user WHERE username = '$username'");
	if ( mysqli_fetch_assoc($redudansi) ) {
		echo 	"<script>
					alert('user sudah terdaftar !');
				</script>";
		return false;
	}

	// cek konfirmasi password
	if ( $password !== $password2 ) {
		echo 	"<script>
					alert('konfirmasi password tidak sesuai');
				</script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambah user admin/user baru ke database
	mysqli_query($conn, "INSERT INTO tbl_user VALUES ('$username', '$password')");
	return mysqli_affected_rows($conn);
}

?>