<?php
	//File products_model.php
	class Model_calon_siswa extends CI_Model  {
	

	function getAllcalonsiswa() 
	{
		// Variable pendukung query	
	
		//select semua data yang ada pada table
		$this->db->where('status', 1);
		$this->db->where('lulus', 0);
		$this->db->from("tr_pendaftaran");
	 
		return $this->db->get();
	}

	
	
	function updatecalonsiswa($id_pendaftaran, $data) 
	{
		$this->db->where('id_pendaftaran', $id_pendaftaran);
		$this->db->update('tr_pendaftaran', $data);
	}
	
	
	
   

	}
