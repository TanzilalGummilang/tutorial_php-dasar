// elemen yg dibutuhkan
var keyword = document.getElementById('keyword');
var tombol_cari = document.getElementById('tombol_cari');
var container = document.getElementById('container');

// tambah event ketika keyword ditulis
keyword.addEventListener('keyup', function() {

	// buat objek ajax
	var xhr = new XMLHttpRequest();

	// cek kesiapan ajax
	xhr.onreadystatechange = function() {
		if( xhr.readyState == 4 && xhr.status == 200 ) {
			container.innerHTML = xhr.responseText;
		}
	}

	// eksekusi ajax
	xhr.open('GET', 'ajax/pemain.php?keyword=' + keyword.value, true);
	xhr.send();

});