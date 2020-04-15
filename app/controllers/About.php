<?php 

class About extends controller {

	public function index($nama = 'Moch. Firman Firdaus', $profesi = 'Programmer', $umur = 21)
	{
		$data['title'] = 'Halaman About Index';
		$data['nama'] = $nama;
		$data['profesi'] = $profesi;
		$data['umur'] = $umur;
		$this->view('templates/header', $data);
		$this->view('about/index', $data); 
		$this->view('templates/footer');
	}

	public function page()
	{
		$data['title'] = 'Halaman About Page';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
		
	}
}