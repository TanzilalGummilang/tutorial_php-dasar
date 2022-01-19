<!DOCTYPE html>
<html>
<head>
	<title>latihan 01</title>
	<style>
		.kotak{
			width: 50px;
			height: 50px;
			background-color: #BADA55;
			text-align: center;
			line-height: 50px;
			margin: 3px;
			float: left;
		}
		.kotak:hover{
			transform: rotate(360deg);
			transition: 1s;
			border-radius: 100%;
		}
		.clear{
			clear: both;
		}
	</style>
</head>
<body>

<?php
	$angka = [
		[1,2,3],
		[4,5,6],
		[7,8,9]
	]; 
 ?>

<?php foreach( $angka as $a1 ) : ?>
	<?php foreach( $a1 as $a2 ) : ?>
		<div class="kotak"> <?= $a2; ?> </div>
	<?php endforeach; ?>
		<div class="clear"></div>
<?php endforeach; ?>

</body>
</html>