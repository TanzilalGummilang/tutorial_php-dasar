<?php 

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ){

// cek username & password
	if(	$_POST["username"] == "admin" &&
		$_POST["password"] == "123"){

// jika benar, redirect ke halaman admin
		header("Location: admin.php");
		exit;
	} elseif (	$_POST["username"] == "" ||
				$_POST["password"] == "") {
		$kosong = true;
	} else {
// jika salah, tampilkan pesan kesalahan
		$salah = true;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>

<h1>login admin</h1>

<!-- jika username atau password tidak diisi -->
<?php if(isset($kosong)) : ?>
	<p style="color: red; font-style: italic;">isi dulu coy !</p>
<?php endif; ?>

<!-- jika username atau password salah -->
<?php if(isset($salah)) : ?>
	<p style="color: red; font-style: italic;">username atau password salah !</p>
<?php endif; ?>

<ul>
<form action="" method="post">
	<li>
		<label for="username">username: </label>
		<input type="text" name="username" id="username">
	</li>
	<li>
		<label for="password">password: </label>
		<input type="password" name="password" id="password">
	</li>
	<li>
		<button type="submit" name="submit">login</button>
	</li>
</form>
</ul>

</body>
</html>