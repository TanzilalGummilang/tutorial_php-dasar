<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>

<?php if( isset($_POST["submit"]) ) : ?>
		<h1>woyyy..., <?= $_POST["nama"]; ?></h1>
<?php endif; ?>

<!-- actionnya ke latihan04.php atau ingin dikosongkan ?? -->
<form action="" method="post">
	masukan nama: <input type="text" name="nama"> <br>
	<button type="submit" name="submit"> kirim </button>
</form>

</body>
</html>