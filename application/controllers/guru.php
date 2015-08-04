<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Guru extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
	
    public function index()
	{	
		if($this->session->userdata('login')){
		$this->load->view('guru/index');
		}else{
		echo "gagal seassion";
		}
	
	}
	
    function logout(){    
        $this->session->unset_userdata('login_guru');
        redirect('login','refresh');
    }
}