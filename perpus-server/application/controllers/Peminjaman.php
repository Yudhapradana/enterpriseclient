<?php
class Peminjaman extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->library(array('form_validation','template'));
        $this->load->model('m_peminjaman');
        $this->load->model('m_laporan');
        
        if(!$this->session->userdata('username')){
            redirect('web');
        }
    }
    
    function index(){
        $data['title']="Transaksi Peminjaman";
        $data['tanggalpinjam']=date('Y-m-d');
        $data['tanggalkembali'] = strtotime('+7 day',strtotime($data['tanggalpinjam']));
        $data['noauto']=$this->m_peminjaman->nootomatis();

       // $data['jml_transaksi']=$this->m_peminjaman->jumlahTransaksi();

        $data['anggota']=$this->m_peminjaman->anggotaPinjam()->result();
        $data['user']=$this->m_peminjaman->belumPinjam()->result();

        //$user=$data['anggota'];
        // $jml=$this->m_peminjaman->anggotaPinjam()->num_rows();
        // echo $jml;
            
        // foreach ($user as $user) {
        //      // print_r($user['jml']);
        //      echo $user['nis'];
        //      echo " ";
        //      // echo "<br>";
        //      if($user['nis']<2){
        //         echo $user['nis'];    
        //      }
            
        //     // for($i=0;$i<$jml;$i++){

        //     // }    

        //      // for($i=0;$<=$user)
        //      // if ($user['jml']<2) {
        //      //     $user['nis'];
        //      // }
        // }
       
        // die();
        $data['tanggalkembali'] = date('Y-m-d', $data['tanggalkembali']);
        $data['tmp']=$this->m_peminjaman->tampilTmp()->result();

        $this->template->display('peminjaman/index',$data);
    }
    
    function aktif(){
        $data['peminjaman']=$this->m_peminjaman->getPeminjaman()->result();
        $this->template->display("peminjaman/aktif",$data);
    }


    function tampil(){
        $data['tmp']=$this->m_peminjaman->tampilTmp()->result();
        $data['jumlahTmp']=$this->m_peminjaman->jumlahTmp();
        $this->load->view('peminjaman/tampil',$data);
    }
    
    function sukses(){
        $buku_beda=$this->m_peminjaman->cekBuku();
        if($buku_beda>0){
            echo "Buku tidak tersedia ! transaksi gagal !";
        }else{
            $tmp=$this->m_peminjaman->tampilTmp()->result();
            foreach($tmp as $row){
            $info=array(
                'id_transaksi'=>$this->input->post('nomer'),
                'nis'=>$this->input->post('nis'),
                'kode_buku'=>$row->kode_buku,
                'tanggal_pinjam'=>$this->input->post('pinjam'),
                'tanggal_kembali'=>$this->input->post('kembali'),
                'status'=>"N"
            );

            $data=array(
                'id_transaksi'=>$this->input->post('nomer'),
                'nis'=>$this->input->post('nis'),
                'kode_buku'=>$row->kode_buku,
                'tanggal_pinjam'=>$this->input->post('pinjam'),
                'tanggal_kembali'=>$this->input->post('kembali')
            );

            // print_r($info);
            $this->m_peminjaman->pinjam($data);
            // print_r($info);
            // die();
            $this->m_peminjaman->simpan($info);
            //hapus data di temp
            $this->m_peminjaman->hapusTmp($row->kode_buku);
            // echo "Transaksi Peminjaman berhasil";
        }
    }
    }
    
    function cariAnggota(){
        $nis=$this->input->post('nis');
        $anggota=$this->m_peminjaman->cariAnggota($nis);
        if($anggota->num_rows()>0){
            $anggota=$anggota->row_array();
            echo $anggota['nama'];
        }
    }
     
    function cariBuku(){
        $kode=$this->input->post('kode');
        $buku=$this->m_peminjaman->cariBuku($kode);
        if($buku->num_rows()>0){
            $buku=$buku->row_array();
            echo $buku['judul']."|".$buku['pengarang'];
        }
    }  
    
    function tambah(){
        $kode=$this->input->post('kode');
        $cek=$this->m_peminjaman->cekTmp($kode);
        if($cek->num_rows()<1){
            $info=array(
                'kode_buku'=>$this->input->post('kode'),
                'judul'=>$this->input->post('judul'),
                'pengarang'=>$this->input->post('pengarang')
            );
            $this->m_peminjaman->simpanTmp($info);
        }
    }
    function stok_kurang(){
        $kode=$this->input->post('kode');
        $buku=$this->m_peminjaman->jumlah_stok($kode);
        $stok=$buku['stok'];
        $stok_kurang=$stok-1;
        
        $tersedia=$this->m_peminjaman->tersedia($kode);
        if($tersedia==0){
            $this->m_peminjaman->update_stok($stok_kurang);
            echo "<script> alert('Buku berhasil dipinjam')</script>";
            redirect('peminjaman','refresh');
        }else{
            echo "<script> alert('Buku telah dipinjam')</script>";
            redirect('peminjaman','refresh');
        }

    }
    function hapus(){
        $kode=$this->input->post('kode');
        $this->m_peminjaman->hapusTmp($kode);
    }
    
    function pencarianbuku(){
        $cari=$this->input->post('caribuku');
        //dijoinkan 
        $data['buku']=$this->m_peminjaman->pencarianbuku($cari)->result();
        $this->load->view('peminjaman/pencarianbuku',$data);
    }

    function dataPeminjaman(){
        $data['kategori_buku']=$this->m_laporan->kategori();

        $data['peminjaman']=$this->m_peminjaman->getData()->result();
        // $dt=$this->m_peminjaman->getData()->result_array();
        // echo $dt['tanggal_kembali'];
        foreach ($data['peminjaman'] as $key) {
           

            $id=$key->id_transaksi;
           
            $tgl=$key->tanggal_kembali;
        

            $denda = date_diff(date_create($key->tanggal_kembali),date_create(date('Y-m-d')));
            $jml=$denda->days*500;
           

            $this->m_peminjaman->updateDenda($id,$jml);
        }
        // print_r($data['peminjaman']["nis"]); 
        //die();
        $this->template->display('peminjaman/data_peminjaman',$data);
    }

    function back_stok($kode_buku){
        $buku=$this->m_peminjaman->jumlah_stok1($kode_buku);
        echo $buku['stok'];
        $stok=$buku['stok'];
        $stok=$stok+1;
        $this->m_peminjaman->stok_kembali($kode_buku,$stok);
        redirect('peminjaman','refresh');
    }

    function editPeminjaman(){
        $this->input->post("");
          if($this->form_validation->run()==true){
            $nis=$this->input->post('nis');            
            $info=array(
                'nama'=>$this->input->post('nama'),
                'kelas'=>$this->input->post('kelas'),
                'ttl'=>$this->input->post('ttl'),
                'jk'=>$this->input->post('jk'),
                'image'=>$gambar
            );
            //update data angggota
            $this->m_anggota->update($nis,$info);
            
            //tampilkan pesan
            $data['message']="<div class='alert alert-success'>Data Berhasil diupdate</div>";
            
            //tampilkan data anggota 
            $data['anggota']=$this->m_anggota->cek($id)->row_array();
            $this->template->display('anggota/edit',$data);
        }else{
            $data['anggota']=$this->m_anggota->cek($id)->row_array();
            $data['message']="";
            $this->template->display('peminjaman/edit',$data);
        }

    
    }

    
}