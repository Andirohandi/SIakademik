<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Lulus extends CI_Controller {
	 function __construct(){
        parent::__construct();
        $this->load->model("model_lulus");
        $this->load->model("model_menu");
        ///constructor yang dipanggil ketika memanggil ro.php untuk melakukan pemanggilan pada model : ro.php yang ada di folder models
    }
	public function index()
	{
		if($this->session->userdata('login'))
        {
		$session = $this->session->userdata('login');
        $data['nm_user_last'] = $session['nm_user_last'];
        $data['id_user'] = $session['id_user'];
        $data['session_level'] = $session['id_level'];
        $status = 2;
		$data['tahunajaran'] = $this->model_lulus->getAlllulus($status);
		$this->load->view('lulus/index', $data);
		}else{
		redirect('welcome/relogin','refresh');	
		}
		
	}

	public function detail($tahun)
    {
        if($this->session->userdata('login'))
        {
        $this->load->model("model_menu");
        $session = $this->session->userdata('login');
        $data['nm_user_last'] = $session['nm_user_last'];
        $data['id_user'] = $session['id_user'];
        $data['session_level'] = $session['id_level'];
       
        $data['listcalonsiswa'] = $this->model_lulus->getAllcalonsiswa($tahun);
        $this->load->view('lulus/detail_siswa', $data);
        }else{
        redirect('welcome/relogin','refresh');  
        }
    }

    public function tidak()
	{
		if($this->session->userdata('login'))
        {
		$session = $this->session->userdata('login');
        $data['nm_user_last'] = $session['nm_user_last'];
        $data['id_user'] = $session['id_user'];
        $data['session_level'] = $session['id_level'];
        $status = 2;
		$data['tahunajaran'] = $this->model_lulus->getAlltidak($status);
		$this->load->view('lulus/tidak', $data);
		}else{
		redirect('welcome/relogin','refresh');	
		}
		
	}
	public function detail_tidak($tahun)
    {
        if($this->session->userdata('login'))
        {
        $this->load->model("model_menu");
        $session = $this->session->userdata('login');
        $data['nm_user_last'] = $session['nm_user_last'];
        $data['id_user'] = $session['id_user'];
        $data['session_level'] = $session['id_level'];
       
        $data['listcalonsiswa'] = $this->model_lulus->getAllcalonsiswatidak($tahun);
        $this->load->view('lulus/detail_siswa_tidak', $data);
        }else{
        redirect('welcome/relogin','refresh');  
        }
    }
	
	public function lulus()
	{
		if($this->session->userdata('login'))
        {
		$session = $this->session->userdata('login');
        $data['nm_user_last'] = $session['nm_user_last'];
        $data['id_user'] = $session['id_user'];
        $data['session_level'] = $session['id_level'];
        $status = 2;
		$data['tahunajaran'] = $this->model_lulus->getAlllus($status);
		$this->load->view('lulus/lulus', $data);
		}else{
		redirect('welcome/relogin','refresh');	
		}
		
	}

	public function detail_lulus($tahun)
    {
        if($this->session->userdata('login'))
        {
        $this->load->model("model_menu");
        $session = $this->session->userdata('login');
        $data['nm_user_last'] = $session['nm_user_last'];
        $data['id_user'] = $session['id_user'];
        $data['session_level'] = $session['id_level'];
       
        $data['listcalonsiswa'] = $this->model_lulus->getAllcalonsiswa($tahun);
        $this->load->view('lulus/detail_siswa_lulus', $data);
        }else{
        redirect('welcome/relogin','refresh');  
        }
    }
	
	

	public function generate($id_tahun_ajaran) 
	{
		if($this->session->userdata('login'))
        {
		
		$data = array(
		'status' => 3	
		);	
		$this->model_lulus->Updatelulus($id_tahun_ajaran, $data);
		redirect('lulus');
		}else{
		redirect('welcome/relogin','refresh');	
		}
	}

	public function reg($id_pendaftaran) 
	{
		if($this->session->userdata('login'))
        {
		
		$data = array(
		'reg' => 1		
		);	
		$this->model_lulus->Updatereg($id_pendaftaran, $data);
		redirect('lulus');
		}else{
		redirect('welcome/relogin','refresh');	
		}
	}



}