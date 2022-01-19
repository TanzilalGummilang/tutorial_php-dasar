<!DOCTYPE html>
<html>
<head>
	<title>latihan 1b</title>
</head>
<body>

	<table border="2" cellpadding="20" cellspacing="0">
		<?php 
			for( $baris=1; $baris<=3; $baris++){
				echo "<tr>";
					for( $kolom=1; $kolom<=5; $kolom++){
						echo "<td> $baris.$kolom </td>";
					}
				echo "</tr>";
			}
		 ?>
	</table>

</body>
</html>
		<!-- <tr>
			<td>1.1</td>
			<td>1.2</td>
			<td>1.3</td>
			<td>1.4</td>
			<td>1.5</td>
		</tr>
		<tr>
			<td>2.1</td>
			<td>2.2</td>
			<td>2.3</td>
			<td>2.4</td>
			<td>2.5</td>
		</tr>
		<tr>
			<td>3.1</td>
			<td>3.2</td>
			<td>3.3</td>
			<td>3.4</td>
			<td>3.5</td>
		</tr> -->