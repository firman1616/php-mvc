//$ jquery jika halaman siap maka akan di jalankan
$(function () {
	//jquery tolong carikan sebuah elemen yang nama kelasnya tampilModalUbah, lalu ketika di klik, jalankan fungsi berikut ini
	$('.tombolTambahData').on('click', function(){
		//jquery cariin saya elemen yang id nya for modalLabel jadi Ubah data mahasiswa
		$('#formModalLabel').html('Tambah Data Mahasiswa')
		$('.modal-footer button[type=submit]').html('Tambah Data');
	});

	//jquery tolong carikan sebuah elemen yang nama kelasnya tampilModalUbah, lalu ketika di klik, jalankan fungsi berikut ini
	$('.tampilModalUbah').on('click', function(){
		//jquery cariin saya elemen yang id nya for modalLabel jadi Ubah data mahasiswa
		$('#formModalLabel').html('Ubah Data Mahasiswa')
		//jquery carikan elemen yang kelasnya modal footer, lalu ambil button didalamnya tapi yang tipe nya submit saja, dan ganti isinya dengan ubah data
		$('.modal-footer button[type=submit]').html('Ubah Data');//CSS SELECTOR
		$('.modal-content form').attr('action', 'http://localhost/phpmvc/public/mahasiswa/ubah');

		const id = $(this).data('id');
		// Setelah fungsi diatas dijalankan maka jalankan fungsi ajax yang ada di bawah
		$.ajax({
			url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				// jquery tolong carikan elemen yyang id nya nama lalu ubah valuenya ganti dengan data json
				$('#nama').val(data.nama);
				$('#nim').val(data.nim);
				$('#jurusan').val(data.jurusan);
				$('#id').val(data.id);
			}
		});
	});



});