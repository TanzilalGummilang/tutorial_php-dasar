// load semua dokumen, lalu kalo sudah ready jalankan function ini
jQuery(document).ready(function(){

	// hilangkan tombol_cari
	$('#tombol_cari').hide();

	// event ketika keyword ditulis
	$('#keyword').on('keyup', function(){

		// munculkan ikon loading
		$('.loader').show();

		// ajax menggunakan load
		/*$('#container').load('ajax/pemain.php?keyword=' + $('#keyword').val());*/

		// $.get()
		$.get('ajax/pemain.php?keyword=' + $('#keyword').val(), function(data){

			$('#container').html(data);
			$('.loader').hide();
		});

	});

});