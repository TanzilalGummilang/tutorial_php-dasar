<?php 
	// date
	// utk menampilkan tgl dgn format tertentu
	echo date("l, d M Y");
	echo "<br>";

	// time
	// UNIX Timestamp / EPOCH time
	// detik yg sdh berlalu sejak 1 januari 1970
	echo time();
	echo "<br>";

	// cari tau hari apa pd dua hari ke depan
	echo date("l, d M Y", time() + 60*60*24*2);
	echo "<br>";

	// mktime
	// membuat detik sendiri
	// mktime(0,0,0,0,0,0)
	// mktime(detik, menit, jam, bulan, tanggal, tahun)
	echo date("l, d M Y", mktime(0,0,0,4,24,1999));
	echo "<br>";

	// strtotime
	echo date("l", strtotime("24 apr 1999"));
 ?>