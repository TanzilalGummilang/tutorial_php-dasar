<?php 
// pengulangan pd array
// for / foreach
$angka = [3,2,15,20,11,77,89,8];

echo array_sum($angka), "<br>";

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan 02</title>
 	<style>
 		.kotak{
 			width: 50px;
 			height: 50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px; /*tulisan ada ditengah kotak*/
 			margin: 3px;
 			float: left; /*biar ngejejer ke kanan*/
 		}
 		.clear {clear: both;} /*utk membersihkan floatnya, dan membuat baris baru*/

 	</style>
 </head>
 <body>
 	<!-- cara ke-1 -->
 	<?php for( $i=0; $i<count($angka); $i++) { ?>
 		<div class="kotak"> <?php echo $angka[$i]; ?> </div>
 	<?php } ?>

 	<div class="clear"></div>

 	 <!-- cara ke-2 -->
 	<?php foreach ( $angka as $a ) { ?>
 		<div class="kotak"> <?php echo $a; ?> </div>
 	<?php } ?>

 	<div class="clear"></div>

 	<!-- cara ke-3 -->
 	<?php foreach( $angka as $a ) : ?>
 		<div class="kotak"> <?= $a; ?> </div>
	<?php endforeach ?>
 </body>
 </html>