<?php 

session_start();
require 'function.php';

// cek jika remember me aktif (cookie)
if ( isset($_COOKIE['id']) && isset($_COOKIE['username'])) {
	$id = $_COOKIE['id'];
	$username = $_COOKIE['username'];

	// ambil username di db berdasar $id
	$result = mysqli_query($conn, "SELECT username FROM tbl_user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dgn username
	if ( $username === hash('sha256', $row["username"]) ) {
		$_SESSION["login"] = true;
	}
}

if ( isset($_SESSION["login"]) ) {
	header("Location: index.php");
	exit;
}



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
			<input type="checkbox" name="remember">
			<label>Remember Me</label>
		<br><br>
			<button type="submit" name="login">Login</button>
	</ul>
</form>

<label>tidak punya akun?</label>
<a href="registrasi.php">Buat Akun</a>

</body>
</html>