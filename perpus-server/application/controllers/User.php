<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('m_buku');
	}

	public function index()
	{
		$data['terbaru']=$this->m_buku->buku()->result();
        $data['favorit']=$this->m_buku->favorit();
		$this->load->view('index.php',$data);		
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */