<?php
	//File products_model.php
	class Model_lulus extends CI_Model  {
	

	function getAlllulus($status) 
	{
		// Variable pendukung query	
	
		//select semua data yang ada pada table
		$this->db->where('status', $status);
		$this->db->from("tr_tahun_ajaran");
	 
		return $this->db->get();
	}

	function getAlltidak($status) 
	{
		// Variable pendukung query	
	
		//select semua data yang ada pada table
		$this->db->where('status >=', $status);
		$this->db->from("tr_tahun_ajaran");
	 
		return $this->db->get();
	}

	function getAlllus($status) 
	{
		// Variable pendukung query	
	
		//select semua data yang ada pada table
		$this->db->where('status >=', $status);
		$this->db->from("tr_tahun_ajaran");
	 
		return $this->db->get();
	}


   
	
	function Updatelulus($id_tahun_ajaran, $data) 
	{
		//delete data yang ada pada table	
		$this->db->where('id_tahun_ajaran', $id_tahun_ajaran);
		$this->db->update('tr_tahun_ajaran', $data);
	}

	function Updatereg($id_pendaftaran, $data) 
	{
		//delete data yang ada pada table	
		$this->db->where('id_pendaftaran', $id_pendaftaran);
		$this->db->update('tr_pendaftaran', $data);
	}

	function getAllcalonsiswa($tahun) 
	{
		// Variable pendukung query	
	
		//select semua data yang ada pada table
		
		$this->db->where('tahun', $tahun);
		$this->db->from("tr_pendaftaran");
	 	
	 	//$this->db->where('id_tahun_ajaran', 1);
		return $this->db->get();
	}

	function getAllcalonsiswatidak($tahun) 
	{
		// Variable pendukung query	
	
		//select semua data yang ada pada table
		$this->db->where('status', 1);
		$this->db->where('lulus', 1);
		$this->db->where('tahun', $tahun);
		$this->db->from("tr_pendaftaran");
	 	$this->db->order_by('no_urut','desc');
		return $this->db->get();
	}



	}
