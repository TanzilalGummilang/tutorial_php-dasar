<?php 

session_start();

if ( isset($_SESSION["login"]) ) {
	header("Location: index.php");
	exit;
}


require 'function.php';

if ( isset($_POST["login"]) ) {
	echo login($_POST);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

<h1>Login</h1>

<form action="" method="post">
	<ul>
		<li>
			<label for="username">Username :</label>
			<input type="text" name="username" id="username" required>
		</li>
		<li>
			<label for="password">Password :</label>
			<input type="password" name="password" id="password" required>
		</li><br>
		<button type="submit" name="login">Login</button>
	</ul>
</form>

<label>tidak punya akun?</label>
<a href="registrasi.php">Buat Akun</a>

</body>
</html>