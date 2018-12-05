<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Client extends CI_Controller {

	var $API="";

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->API="http://localhost:8080/perpus-server/index.php";

		if (!$this->session->userdata('username')) {
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$data['username']=$this->session->userdata('username');
		$session=$data['username'];
		
		$nis = array('nis' => $session);
		
		$data['transaksi']=json_decode($this->curl->simple_get($this->API.'/rest',$nis));
		$data['buku']=json_decode($this->curl->simple_get($this->API.'/rest/buku'));
		// print_r($data['mahasiswa']);
		// echo "string";
		// die();
		$this->load->view('buku/list',$data);	
	}

	public function profile($id){
		$id=$this->session->userdata('username');
		$session = array('nis' => $id);
		$data['profile'] = json_decode($this->curl->simple_get($this->API.'/rest/profile',$session));
		$data['buku'] = json_decode($this->curl->simple_get($this->API.'/rest/bukuPinjam',$session));
		$this->load->view('user/profile', $data);

	}


	// function create(){
	// 	if (isset($_POST['submit'])) {
	// 		$data = array(
	// 			'id_peminjaman' => $this->input->post('id_peminjaman'),
	// 			'nama' => $this->input->post('nama'),
	// 			'alamat' => $this->input->post('alamat'),
	// 			'telepon' => $this->input->post('telepon')
	// 			);
	// 		$insert= $this->curl->simple_post($this->API.'/peminjaman',$data, array(CURLOPT_BUFFERSIZE =>10));
	// 		if ($insert) {
	// 			$this->session->set_flashdata('hasil', 'insert data berhasil');
	// 		}else{
	// 			$this->session->set_flashdata('hasil', 'Insert Data Gagal');
	// 		}
	// 		redirect('peminjaman');
	// 	}else{
	// 		$data['telepon']=json_decode($this->curl->simple_get($this->API.'/telepon'));
	// 		$this->load->view('peminjaman/create', $data, FALSE);
	// 	}
	// }


	function edit(){
		if (isset($_POST['submit'])) {

			// echo $this->input->post('nis');
			// die();

			$data = array(
				'nis' => $this->input->post('nis'),
				'nama' => $this->input->post('nama'),
				'tgl' => $this->input->post('tgl'),
				'kls' => $this->input->post('kelas'),
				'img' => $this->input->post('img'));

				$update = $this->curl->simple_put($this->API.'/rest/anggota',$data, array(CURLOPT_BUFFERSIZE =>10));
				if ($update) {
					$this->session->set_flashdata('hasil', 'Update Data Berhasil');
				}else{
					$this->session->set_flashdata('hasil', 'Update Data Gagal');
				}
				redirect('client/edit');
			}else{
			
			$data = array('nis'=> $this->session->userdata('username'));
			
			$data['anggota']=json_decode($this->curl->simple_get($this->API.'/rest/profile',$data));
			
			// print_r($data['anggota']);
			// die();
			$this->load->view('user/edit', $data);

			}
		}

	// function delete($id_peminjaman){
	// 		if(empty($id_peminjaman)){
	// 			redirect('peminjaman');
	// 		}else{
	// 			$delete = $this->curl->simple_delete($this->API.'/peminjaman', array('id_peminjaman'=>$id_peminjaman),array(CURLOPT_BUFFERSIZE => 10));
	// 		if($delete)	{
	// 			$this->session->set_flashdata('hasil','Delete Data Berhasil');
	// 		}else{
	// 			$this->session->set_flashdata('hasil','Delete Data Gagal');
	// 		}
	// 			redirect('peminjaman');
	// 		}
	// }

	function logout(){
		$this->session->unset_userdata('username');
		redirect('welcome','refresh');
	}

}

/* End of file Client.php */
/* Location: ./application/controllers/Client.php */