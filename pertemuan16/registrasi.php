<?php

require 'function.php';

if ( isset($_POST["registrasi"]) ) {

	if ( registrasi($_POST) > 0 ) {
		echo 	"<script>
					alert('user baru berhasil ditambahkan');
					document.location.href = 'login.php';
				</script>";
	} else {
		echo mysqli_error($conn);
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body>

<h1>Registrasi</h1>

<form action="" method="post">
	<ul>
		<li>
			<label for="username">Username :</label>
			<input type="text" name="username" id="username" required>
		</li>
		<li>
			<label for="password">Password :</label>
			<input type="text" name="password" id="password" required>
		</li>
		<li>
			<label for="password2">Konfirmasi Password :</label>
			<input type="text" name="password2" id="password2" required>
		</li><br>
			<button type="submit" name="registrasi">Registrasi</button>
	</ul>
</form>

</body>
</html>