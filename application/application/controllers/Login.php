<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->API="http://localhost:8080/perpus-server/index.php";
	}

	public function index()
	{
		$this->load->view('user/login');	
	}

	public function proses(){
		$this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','required|trim|xss_clean');
        $this->form_validation->set_rules('password','password','required|trim|xss_clean');
        // print_r($this->input->post('username'));
        // print_r($this->input->post('password'));
        // die();
        if($this->form_validation->run()==true){
            $this->session->set_flashdata('message','Username dan password harus diisi');
            redirect('client');
        }else{
            $nis=$this->input->post('nis');
            $password=$this->input->post('password');
            $auth = array('nis' => $nis,
            	'pass' => $password
             );
             
			$hasil = json_decode($this->curl->simple_get($this->API.'/rest/proses',$auth));
			//print_r($hasil->status);
			//die();
			//redirect('welcome','refresh');
			// echo $hasil->session;
			// die();
			if ($hasil->status=="login berhasil"){
				$this->session->set_userdata("username",$hasil->session);
				

				redirect('client','refresh');
			}else if ($hasil->status=="login gagal"){
				echo "login gagal";
				redirect('','refresh');

			}

		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */