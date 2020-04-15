<?php 

class Mahasiswa extends Controller {
	public function index()
	{
		$data['title'] = 'Data Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
		$this->view('templates/header', $data);
		$this->view('mahasiswa/index', $data);
		$this->view('templates/footer');
	}

	public function detail($id)
	{
		$data['title'] = 'Detail Data Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
		$this->view('templates/header', $data);
		$this->view('mahasiswa/detail', $data);
		$this->view('templates/footer');
	}

	function tambah()
	{
		if ( $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
			Flasher::setFlash('berhasil', 'ditambahkan', 'success');
			header('Location:' . BASEURL . '/mahasiswa');
			exit;
		}else {
			Flasher::setFlash('gagal', 'ditambahkan', 'danger');
			header('Location:' . BASEURL . '/mahasiswa');
			exit;
		}
	}

	public function hapus($id)
	{
		if ( $this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0) {
			Flasher::setFlash('berhasil', 'dihapus', 'success');
			header('Location:' . BASEURL . '/mahasiswa');
			exit;
		}else {
			Flasher::setFlash('gagal', 'dihapus', 'danger');
			header('Location:' . BASEURL . '/mahasiswa');
			exit;
		}
	}

	public function getubah()
	{
		$json = $this->model('Mahasiswa_model')->getMahasiswaByID($_POST['id']);
		
		echo json_encode($json);
	}

	public function ubah()
	{
		if ( $this->model('Mahasiswa_model')->ubahDataMahasiswa($_POST) > 0) {
			Flasher::setFlash('berhasil', 'diubah', 'success');
			header('Location:' . BASEURL . '/mahasiswa');
			exit;
		}else {
			Flasher::setFlash('gagal', 'diubah', 'danger');
			header('Location:' . BASEURL . '/mahasiswa');
			exit;
		}
	}

}