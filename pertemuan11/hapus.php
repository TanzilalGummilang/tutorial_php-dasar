<?php 

require 'function.php';

$kode_pemain = $_GET["kode_pemain"];

if( hapus($kode_pemain) > 0) {
	echo "
			<script>
				alert('data berhasil dihapus');
				document.location.href = 'index.php';
			</script>
		";
} else {
	echo "
			<script>
				alert('data gagal dihapus');
				document.location.href = 'index.php';
			</script>
		";
}

?>