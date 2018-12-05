<?php class Laporan extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->library(array('template'));
        $this->load->model('m_laporan');
        $this->load->model('m_peminjaman');
        
        if(!$this->session->userdata('username')){
            redirect('web');
        }
    }
    
    function anggota(){
        $data['title']="Data Anggota";
        $data['anggota']=$this->m_laporan->semuaAnggota()->result();
        $this->template->display('laporan/anggota',$data);
    }
    
    function buku(){
        $data['title']="Data Buku";
        $data['buku']=$this->m_laporan->semuaBuku()->result();
        $this->template->display('laporan/buku',$data);
    }
    
    function peminjaman(){
        $data['title']="Laporan Peminjaman";

        $data['peminjaman']=$this->m_peminjaman->getData()->result();
        foreach ($data['peminjaman'] as $key) {
            $id=$key->id_transaksi;
            $tgl=$key->tanggal_kembali;
            $denda = date_diff(date_create($key->tanggal_kembali),date_create(date('Y-m-d')));
            $jml=$denda->days*500;
            $this->m_peminjaman->updateDenda($id,$jml);
        }
        $this->template->display('laporan/peminjaman',$data);
    }
    
    function cari_pinjaman(){
    // disini tempat membuat tampilan dendanya
        $data['title']="Detail Peminjaman";
        $tanggal1=$this->input->post('tanggal1');
        $tanggal2=$this->input->post('tanggal2');
        $data['lap']=$this->m_laporan->detailpeminjaman($tanggal1,$tanggal2)->result();
    
        $this->load->view('laporan/cari_pinjaman',$data);
    
    }
    
    function detail_pinjam($id){
        $data['title']=$id;
        $data['pinjam']=$this->m_laporan->detail_pinjam($id)->row_array();
        $data['detail']=$this->m_laporan->detail_pinjam($id)->result();


        $this->template->display('laporan/detail_pinjam',$data);
    }
    
    function pengembalian(){
        $data['title']="Data Pengembalian";
        $this->template->display('laporan/pengembalian',$data);
    }
    
    function cari_pengembalian(){
        $data['title']="Detail Pengembalian";
        $tanggal1=$this->input->post('tanggal1');
        $tanggal2=$this->input->post('tanggal2');
        $data['lap']=$this->m_laporan->detailpengembalian($tanggal1,$tanggal2)->result();
        $this->load->view('laporan/cari_pengembalian',$data);
    }
    function cetak(){
        $data['title']="Data Peminjaman";
        $tanggal1=$this->input->post('tanggal1');
        $tanggal2=$this->input->post('tanggal2');
        $data['lap']=$this->m_laporan->detailpeminjaman($tanggal1,$tanggal2)->result();
        $this->load->view('laporan/cetak',$data); //$data['anggota']=$this->m_anggota->anggota()->result();
       
    }

    function createPdf($id)
    {
        $data['title']=$id;
        $data['pinjam']=$this->m_laporan->detail_pinjam($id)->row_array();
        $data['detail']=$this->m_laporan->detail_pinjam($id)->result();
        $this->load->library('pdf');
        $this->pdf->load_view('laporan/bukti',$data);
    }

    function pdf(){
        $this->load->library('pdf');
        $this->pdf->load_view('welcome_message');
    }
}