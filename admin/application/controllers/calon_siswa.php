<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Calon_siswa extends CI_Controller {
     function __construct(){
        parent::__construct();
        $this->load->model("model_calon_siswa");
        $this->load->model("model_menu");
        ///constructor yang dipanggil ketika memanggil ro.php untuk melakukan pemanggilan pada model : ro.php yang ada di folder models
    }
    public function index()
    {
        if($this->session->userdata('login'))
        {
        $this->load->model("model_menu");
        $session = $this->session->userdata('login');
        $data['nm_user_last'] = $session['nm_user_last'];
        $data['id_user'] = $session['id_user'];
        $data['session_level'] = $session['id_level'];
       
        $data['listcalonsiswa'] = $this->model_calon_siswa->getAllcalonsiswa();
        $this->load->view('calon_siswa/index', $data);
        }else{
        redirect('welcome/relogin','refresh');  
        }
    }
    
    
    Public function update() 
    {
       

        if($this->session->userdata('login'))
        {
        //insert semua data yang ada pada table
        $id_pendaftaran = $this->input->post ('id_pendaftaran');

        $data = array(
        'nilai' => $this->input->post ('nilai'),
        'active' => $this->input->post ('active')
        );  
        $this->model_calon_siswa->updatecalonsiswa($id_pendaftaran, $data);

        redirect('calon_siswa');
        }else{
        redirect('welcome/relogin','refresh');  
        }
    
    }

   

   

    

}