<!DOCTYPE html>
<html>
<head>
	<title>latihan 1c</title>
</head>
<body>

	<table border="1" cellpadding="20" cellspacing="0">
		<?php for($baris=1; $baris<=3; $baris++) : ?>
			<tr>
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