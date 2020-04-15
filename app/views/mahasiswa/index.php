<div class="container mt-3">

	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
		<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal"> Tamba Data Mahasiswa </button>
    <br><br>
		
			<h3>Daftar Mahasiswa</h3>
			<ul class="list-group">
			<?php foreach ($data['mhs'] as $mhs)  : ?>
			  <li class="list-group-item ">
			  	<?= $mhs['nama']; ?>
			  	
			  	<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Yakinn Lo') ">Hapus</a>
				
				<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge badge-warning float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Edit</a>

			  	<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge badge-info float-right ml-1">Detail</a>
			  	</li>
			  <?php endforeach; ?>
			</ul>
			
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
    <input type="hidden" name="id" id="id">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>

        <div class="form-group">
          <label for="nim">NIM</label>
          <input type="number" class="form-control" id="nim" name="nim">
        </div>

        <div class="form-group">
        <label for="jurusan">Jurusan</label>
        <select class="form-control" id="jurusan" name="jurusan">
          <option value="Teknik Informatika">Teknik Informatika</option>
          <option value="Teknik Sipil">Teknik Sipil</option>
          <option value="Teknik Elektro">Teknik Elektro</option>
        </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
      </div>
      </form>
    </div>
  </div>
</div>