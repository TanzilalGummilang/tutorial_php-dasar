<!DOCTYPE html>
<html>
<head>
	<title>latihan 2b</title>
	<style>
		.warna_baris {background-color: yellow;}
		.warna_kolom {background-color: green;}
	</style>
</head>
<body>

	<table border="1" cellpadding="20" cellspacing="0">

		<?php for($baris=1; $baris<=5; $baris++) : ?>
			<?php if( $baris % 2 == 0) : ?>
				<tr class="warna_baris" >
			<?php else : ?>
				<tr>
			<?php endif; ?>

					<?php for($kolom=1; $kolom<=5; $kolom++) : ?>
						<td>
							<?= "$baris.$kolom"; ?>
						</td>
					<?php endfor; ?>
				</tr>

		<?php endfor; ?>
		
	</table>

</body>
</html>