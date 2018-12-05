<?php
class Dashboard extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('m_petugas');
        $this->load->library(array('form_validation','template'));
        $this->load->model('m_laporan');
        $this->load->model('m_buku');
        $this->load->model('m_anggota');
        $this->load->model('m_pengembalian');
        $this->load->model('m_peminjaman');
        //die();

        if(!$this->session->userdata('username')){
            redirect('web');
        }
    }
    
    function index(){
        $data['title']="Home";
        $this->m_laporan->jumlahPeminjaman();
        $anggota=$this->m_laporan->jumlahAnggota();
        $pinjam=$this->m_laporan->anggotaMeminjam();
        $user=($pinjam/$anggota*100);
        $data['anggota_pinjam']= (int)$user;
        $data['username']=$this->session->userdata('username');
        $data['kategori_buku']=$this->m_laporan->kategori();
        //$buku=$this->m_laporan->bukuDipinjam()->num_rows();
        $data['nBuku']=$this->m_buku->semua()->num_rows();
        $data['nAnggota']=$this->m_anggota->semua()->num_rows();
        $data['peminjaman']=$this->m_peminjaman->getTransaksi()->result();
        $data['pengembalian']=$this->m_pengembalian->semua()->result();
        $data['petugas']=$this->m_petugas->petugas()->result_array();


        //die();
        // die();
        $this->template->display('dashboard/index',$data);
    }
    
    function petugas(){
        $data['title']="Data Petugas";
        $data['petugas']=$this->m_petugas->semua()->result();
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
        $this->template->display('dashboard/petugas',$data);
    }
    
    function tambahpetugas(){
        $data['title']="Tambah Petugas";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $user=$this->input->post('user');
            $cek=$this->m_petugas->cekKode($user);
            if($cek->num_rows()>0){
                $data['message']="<div class='alert alert-danger'>Username sudah digunakan</div>";
                $this->template->display('dashboard/tambahpetugas',$data);
            }else{
                $info=array(
                    'user'=>$this->input->post('user'),
                    'password'=>md5($this->input->post('password'))
                );
                $this->m_petugas->simpan($info);
                redirect('dashboard/petugas/add_success');
            }
        }else{
            $data['message']="";
            $this->template->display('dashboard/tambahpetugas',$data);
        }
    }
    
    function edit($id){
        $data['title']="Update data Petugas";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $id=$this->input->post('id');
            $info=array(
                'user'=>$this->input->post('user'),
                'password'=>md5($this->input->post('password'))
            );
            $this->m_petugas->update($id,$info);
            $data['petugas']=$this->m_petugas->cekId($id)->row_array();
            $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";
            $this->template->display('dashboard/editpetugas',$data);
        }else{
            $data['message']="";
            $data['petugas']=$this->m_petugas->cekId($id)->row_array();
            $this->template->display('dashboard/editpetugas',$data);
        }
    }
    
    function hapus(){
        $kode=$this->input->post('kode');
        $this->m_petugas->hapus($kode);
    }
    
    function _set_rules(){
        $this->form_validation->set_rules('user','username','required|trim');
        $this->form_validation->set_rules('password','password','required|trim');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
    }
    
    function logout(){
        $this->session->unset_userdata('username');
        redirect('user');
    }
}