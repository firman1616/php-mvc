<?php 

class Mahasiswa_model{
	/*private $mhs = [
		[
			"nama" => "Moch. Firman Firdaus",
			"nim" => "1614311030",
			"jurusan" => "Teknik Informatika"
		],
		[
			"nama" => "Farida Nur Zeha",
			"nim" => "1614321053",
			"jurusan" => "Teknik Informatika"
		],
		[
			"nama" => "Hilwanda Oka F.P",
			"nim" => "1614311006",
			"jurusan" => "Teknik Informatika"
		]
	];*/

	

	private $table = 'mahasiswa';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllMahasiswa()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	function getMahasiswaByID($id)
	{
		$this->db->query('SELECT * FROM '. $this->table . ' WHERE id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}

	function tambahDataMahasiswa($data)
	{
		$query = "INSERT INTO mahasiswa
					VALUES
					('', :nama, :nim, :jurusan)";
		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nim', $data['nim']);
		$this->db->bind('jurusan', $data['jurusan']);

		$this->db->execute();

		return $this->db->rowCount();
	}

	public function hapusDataMahasiswa($id)
	{
		$query = "DELETE FROM mahasiswa where id = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);

		$this->db->execute();

		return $this->db->rowCount();
	}

	function ubahDataMahasiswa($data)
	{
		$query = "UPDATE mahasiswa set 
				 nama = :nama,
				 nim = :nim,
				 jurusan = :jurusan
				 WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('nim', $data['nim']);
		$this->db->bind('jurusan', $data['jurusan']);
		$this->db->bind('id', $data['id']);

		$this->db->execute();

		return $this->db->rowCount();
	}


}