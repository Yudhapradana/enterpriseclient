<?php
class Web extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model(array('m_buku','m_anggota','m_petugas'));
        if($this->session->userdata('username')){
            redirect('dashboard');
        }
    }
    
    function index(){
        
        $data['terbaru']=$this->m_buku->buku()->result();
        $data['favorit']=$this->m_buku->favorit();
        $this->load->library('form_validation');
        $this->load->view('web/index',$data);
    }
    
    function cari_buku(){
        $cari=$this->input->post('cari');
        $data['hasil']=$this->m_buku->cari($cari)->result();
        $data['title']="Pencarian Buku";
        $this->load->view('web/cari_buku',$data);
    }
    
    function anggota(){
        $data['title']="Data Anggota";
        $data['anggota']=$this->m_anggota->semua()->result();
        $this->load->view('web/anggota',$data);
    }
    
    function cari_anggota(){
        $cari=$this->input->post('cari');
        $data['title']="Data Anggota";
        $data['anggota']=$this->m_anggota->cari($cari)->result();
        $this->load->view('web/anggota',$data);
    }
    
    function login(){
        $this->load->view('web/login');
    }
    
    function proses(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','required|trim|xss_clean');
        $this->form_validation->set_rules('password','password','required|trim|xss_clean');
        // print_r($this->input->post('username'));
        // print_r($this->input->post('password'));
        // die();
        if($this->form_validation->run()==true){
            $this->session->set_flashdata('message','Username dan password harus diisi');
            echo "string";
            // die();
            redirect('web');
        }else{
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $cek=$this->m_petugas->cek($username,md5($password));
            // print_r($cek);
            // die();
            if($cek->num_rows()>0){
                //login berhasil, buat session
                $this->session->set_userdata('username',$username);
                redirect('dashboard');
                
            }else{
                //login gagal
                $this->session->set_flashdata('message','Username atau password salah');
                redirect('web');
                die();
            }
        }
    }
}