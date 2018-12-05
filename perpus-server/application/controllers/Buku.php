<?php
class Buku extends CI_Controller{
    private $limit=20;
    
    function __construct(){
        parent::__construct();
        $this->load->library(array('template','form_validation','pagination','upload'));
        $this->load->model('m_buku');
        
        
    }
    
    function index($offset=0,$order_column='kode_buku',$order_type='asc'){
        if(!$this->session->userdata('username')){
            redirect('web');
        }
        if(empty($offset)) $offset=0;
        if(empty($order_column)) $order_column='kode_buku';
        if(empty($order_type)) $order_type='asc';
        
        //load data
        $data['buku']=$this->m_buku->semua($this->limit,$offset,$order_column,$order_type)->result();
        $data['title']="Data Buku";
        
        $config['base_url']=site_url('anggota/index/');
        $config['total_rows']=$this->m_buku->jumlah();
        $config['per_page']=$this->limit;
        $config['uri_segment']=3;
        $data['nBuku']=$this->m_buku->semua()->result();
        $this->pagination->initialize($config);
        $data['pagination']=$this->pagination->create_links();
        
        
        if($this->uri->segment(3)=="delete_success")
            $data['message']="<div class='alert alert-success'>Data berhasil dihapus</div>";
        else if($this->uri->segment(3)=="add_success")
            $data['message']="<div class='alert alert-success'>Data Berhasil disimpan</div>";
        else
            $data['message']='';
            $this->template->display('buku/index',$data);
    }
    
    
    function tambah(){
        //kode buku masih salah
        if(!$this->session->userdata('username')){
            redirect('web');
        }else{
        $data['title']="Tambah Buku";
        $data['kategori']=$this->m_buku->kategori();
        $data['buku']=$this->m_buku->data_buku();
        $this->_set_rules();
        if($this->form_validation->run()==true){//jika validasi dijalankan dan benar
            $kode=$this->input->post('kode'); // mendapatkan input dari kode
            $cek=$this->m_buku->cek($kode); // cek kode di database
            if($cek->num_rows()>0){ // jika kode sudah ada, maka tampilkan pesan
                
                $data['message']="";
                // $nama=$this->input->post('nama_kategori');
                // echo $nama;
                $id=$this->input->post('nama_kategori');
                $name=$this->m_buku->kodeKategori($id)->row();
               // print_r($name);
                $nama=$name->nama_kategori;
        
                $kode_buku=$this->m_buku->cekKode($nama)->row();
                $kode=intval($kode_buku->kode_buku+1);
                
                print_r($kode);
                // $kode_buku=$kode_buku;
                $config['upload_path'] = './assets/img/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '1000';
                $config['max_width']  = '2000';
                $config['max_height']  = '1024';
                
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('gambar')){
                    $gambar="";
                }else{
                    $gambar=$this->upload->file_name;
                }
                $id=$this->input->post('nama_kategori');
                $kategori=$this->m_buku->kodeKategori($id)->row();
                // print_r($kategori);
                // die(); 

                $info=array(
                    'kode_buku'=>$kode+1,
                    'judul'=>$this->input->post('judul'),
                    'kategori'=>$kategori->nama_kategori,
                    'pengarang'=>$this->input->post('pengarang'),
                    'klasifikasi'=>$this->input->post('klasifikasi'),
                    'tanggal_input'=>$this->input->post('tgl'),
                    'stok'=>$this->input->post('stok'),
                    'image'=>$gambar
                );
                
                $this->m_buku->simpan($info);
                $this->template->display('buku/tambah',$data);
            }else{ // jika kode buku belum ada, maka simpan
                
                //setting konfiguras upload image
                $config['upload_path'] = './assets/img/';
		        $config['allowed_types'] = 'gif|jpg|png';
        		$config['max_size']	= '1000';
        		$config['max_width']  = '2000';
        		$config['max_height']  = '1024';
                
                $this->upload->initialize($config);
                if(!$this->upload->do_upload('gambar')){
                    $gambar="";
                }else{
                    $gambar=$this->upload->file_name;
                }
                $id=$this->input->post('nama_kategori');
                $kategori=$this->m_buku->kodeKategori($id)->row();
                
                $info=array(
                    'kode_buku'=>$this->input->post('kode'),
                    'kategori'=>$kategori->nama_kategori,
                    'judul'=>$this->input->post('judul'),
                    'pengarang'=>$this->input->post('pengarang'),
                    'klasifikasi'=>$this->input->post('klasifikasi'),
                    'tanggal_input'=>$this->input->post('tgl'),
                    'stok'=>$this->input->post('stok'),
                    'image'=>$gambar
                );
                $this->m_buku->simpan($info);
                redirect('buku/index/add_success');

                // if ($info->num_rows()>0) {
                // $this->m_buku->simpan($info);
                // redirect('buku/index/add_success');
                // }else{
                //     echo "<script>alert('kode_buku sudah ada')</script>";
                //     redirect('buku/tambah','refresh');
                // }

            }
        }else{
            $data['message']="";
            $this->template->display('buku/tambah',$data);
        }
    }
    }
    
    function edit($id){
        if(!$this->session->userdata('username')){
            redirect('web');
        }else{
        $data['title']="Edit data Buku";
        $this->_set_rules();
        if($this->form_validation->run()==true){
            $kode=$this->input->post('kode');
            
            //setting konfiguras upload image
            $config['upload_path'] = './assets/img/';
	    $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']	= '1000';
	    $config['max_width']  = '2000';
	    $config['max_height']  = '1024';
                
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('gambar')){
                $gambar="";
            }else{
                $gambar=$this->upload->file_name;
            }
            
            $info=array(
                'judul'=>$this->input->post('judul'),
                'pengarang'=>$this->input->post('pengarang'),
                'klasifikasi'=>$this->input->post('klasifikasi'),
                'stok'=>$this->input->post('stok'),

                'image'=>$gambar
            );
            $this->m_buku->update($kode,$info);
            
            $data['buku']=$this->m_buku->cek($id)->row_array();
            $data['message']="<div class='alert alert-success'>Data berhasil diupdate</div>";
            $this->template->display('buku/edit',$data);
        }else{
            $data['message']="";
            $data['buku']=$this->m_buku->cek($id)->row_array();
            $this->template->display('buku/edit',$data);
        }
    }
    }
    
    function edit_kategori($id){
    //akms
     if(!$this->session->userdata('username')){
            redirect('web');
        }else{
        $data['title']="Edit Kategori Buku";
        $this->form_validation->set_rules('id','Id Kategori','required|max_length[5]');
        $this->form_validation->set_rules('nama','Nama Kategori','required|max_length[100]');
        if($this->form_validation->run()==true){
            $kode=$this->input->post('id');
            $info=array(
                'id_kategori'=>$this->input->post('id'),
                'nama_kategori'=>$this->input->post('nama')
            );
            $this->m_buku->update_kategori($kode,$info);
            
            $data['kategori']=$this->m_buku->cek_kategori($id)->row_array();
            //$data['message']="<div class='alert alert-success'>Data berhasil diupdate</div>";
            echo "<script>alert('Edit Kategori telah Berhasil')</script>";
            $this->template->display('buku/edit_kategori',$data);
        }else{
            $data['message']="";
            $data['kategori']=$this->m_buku->cek_kategori($id)->row_array();
            $this->template->display('buku/edit_kategori',$data);
        }
    }
    }

    function hapus(){
    if(!$this->session->userdata('username')){
            redirect('web');
        }else{
    $kode=$this->input->post('kode');
    $detail=$this->m_buku->cek($kode)->result();
	foreach($detail as $det):
	    unlink("assets/img/".$det->image);
	endforeach;
        $this->m_buku->hapus($kode);
    }
    }
    function details(){
        $data['details']=$this->m_buku->details()->result();
        $this->load->view('buku/details', $data);
    }

    function cari(){
     if(!$this->session->userdata('username')){
            redirect('web');
        }else{
        $data['title']="Pencairan";
        $cari=$this->input->post('cari');
        $cek=$this->m_buku->cari($cari);
        if($cek->num_rows()>0){
            $data['message']="";
            $data['buku']=$cek->result();
            $this->template->display('buku/cari',$data);
        }else{
            $data['message']="<div class='alert alert-success'>Data tidak ditemukan</div>";
            $data['buku']=$cek->result();
            $this->template->display('buku/cari',$data);
        }
    }
    }
    
    function _set_rules(){
        $this->form_validation->set_rules('kode','Kode Buku','required|max_length[5]');
        $this->form_validation->set_rules('judul','Judul Buku','required|max_length[100]');
        $this->form_validation->set_rules('pengarang','Pengarang','required|max_length[50]');
        $this->form_validation->set_rules('klasifikasi','Klasifikasi','required|max_length[25]');
        $this->form_validation->set_error_delimiters("<div class='alert alert-danger'>","</div>");
    }

    function halaman_kategori(){
        $data['tittle']='CRUD Halaman Kategori Buku';
        $data['kategori']=$this->m_buku->kategori();
        $this->template->display('buku/kategori',$data);


    }

    function hapus_kategori(){
    if(!$this->session->userdata('username')){
            redirect('web');
        }else{
    $kode=$this->input->post('kode');
    $detail=$this->m_buku->cek_kategori($kode)->result();
    $this->m_buku->hapus_kategori($kode);
    }
    }

    function tambah_kategori(){
        $this->m_buku->insert_kategori();
        echo "<script>alert('Kategori berhasil ditambahkan ')</script>";
        redirect('buku/tambah','refresh');

    }  

    function cariKategori(){
       $nama_kategori=$this->input->post('nama_kategori');
        
        $nama_kategori=$this->m_buku->cariKategori($nama_kategori);
        if($nama_kategori->num_rows()>0){
            $nama_kategori=$nama_kategori->row_array();
            echo $id_kategori['nama_kategori'];
    
        }
    } 

}