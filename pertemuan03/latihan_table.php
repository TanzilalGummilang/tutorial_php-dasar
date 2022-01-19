<!DOCTYPE html>
<html>
<head>
	<title>table 5x5</title>
	<style>
		.warna-baris-ke-1 {
			background-color: black;
			color: red;
		}
		.warna-baris-ke-2 {
			background-color: red;
			color: yellow;
		}
		.warna-baris-ke-3 {
			background-color: yellow;
			color: black;
		}
	</style>
</head>
<body>

<table border="3" cellpadding="10" cellspacing="5">

	<!-- baris -->
	<?php for ($i=1; $i <= 3; $i++) : ?>

		<!-- warna tabel per baris -->
		<?php if ($i==1) : ?>
			<tr class="warna-baris-ke-1">
		<?php elseif ($i==2) : ?>
			<tr class="warna-baris-ke-2">
		<?php else : ?>
			<tr class="warna-baris-ke-3">
		<?php endif ?>

			<!-- kolom -->
			<?php for ($j=1; $j <= 5; $j++) : ?>
				<td> <?= "$i,$j"; ?> </td>
			<?php endfor ?>

		</tr>

	<?php endfor ?>

</table>

</body>
</html>