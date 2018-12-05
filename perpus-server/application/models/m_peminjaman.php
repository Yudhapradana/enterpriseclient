<?php
class M_Peminjaman extends CI_Model{
    private $table="transaksi";
    
    function nootomatis(){
        $today=date('Ymd');
        $server = "localhost";
        $usernames = "root";
        $passwords = "";
        $database = "tugas_besar";// nama database

        $mysqli = mysqli_connect($server, $usernames, $passwords, $database);
        $query=mysqli_query($mysqli,"select max(id_transaksi) as last from transaksi where id_transaksi like '$today%'");
        $data=mysqli_fetch_array($query);
        $lastNoFaktur=$data['last'];
        
        $lastNoUrut=substr($lastNoFaktur,8,3);
        
        $nextNoUrut=$lastNoUrut+1;
        die();
        
        $nextNoTransaksi=$today.sprintf('%03s',$nextNoUrut);
        
        return $nextNoTransaksi;
    }
    
    function getAnggota(){
        return $this->db->get("anggota");
    }

    // function anggotaPinjam(){    
    //     return $this->db->query("select distinct a.nis from anggota a");

    // }

//terakhir
    function anggotaPinjam(){    
        return $this->db->query("select a.nis, COUNT(t.id_transaksi) as jml from Anggota a inner join transaksi t ON a.nis=t.nis where Status='N' GROUP by a.nis");
    }
   
// where Status='N' GROUP by a.nis
    // cara 2 uda dapat user non 
     function belumPinjam(){    
        return $this->db->query("select anggota.nis from anggota WHERE anggota.nis not in(select a.nis from anggota a inner join transaksi t on a.nis=t.nis where t.status='N' GROUP by a.nis)");

    }

    // function anggotaPinjam(){    
    //     return $this->db->query("");
    // }



    // function anggotaPinjam(){    
    //     return $this->db->query("select a.nis, COUNT(t.id_transaksi) as jml from Anggota a full outer join transaksi t where Status='N' GROUP by a.nis");
    // }

    //  function anggotaPinjam(){    
    //     return $this->db->query("select a.nis from anggota a union select t.count(t.nis) from transaksi t where status='N'");

    // }

    function cariAnggota($nis){
        $this->db->where("nis",$nis);
        return $this->db->get("anggota");
    }
    
    function cariBuku($kode){

        $this->db->where("kode_buku",$kode);
        return $this->db->get("buku");
    }
    
    function simpanTmp($info){
        $this->db->insert("tmp",$info);
    }
    
    function tampilTmp(){
        return $this->db->get("tmp");
    }
    
    function cekTmp($kode){
        $this->db->where("kode_buku",$kode);
        return $this->db->get("tmp");
    }
    
    function jumlahTmp(){
        return $this->db->count_all("tmp");
    }
    
    function hapusTmp($kode){
        $this->db->where("kode_buku",$kode);
        $this->db->delete("tmp");
    }
    
    function simpan($info){
        $this->db->insert("transaksi",$info);
    }

    function pinjam($info){
        $this->db->insert("peminjaman",$info);
    }
    
    function pencarianbuku($cari){
        $this->db->where('stok >=', 1);
        $this->db->like("judul",$cari);
        return $this->db->get("buku");
    }
    
    function jumlah_stok(){
        $kode=$this->input->post('kode');
        $this->db->select('stok');
        $this->db->where('kode_buku', $kode);
        $jml_buku=$this->db->get('buku');
        return $jml_buku->row_array();
    }

    function update_stok($stok_kurang){
        $kode=$this->input->post('kode');
        $jml_stok = array('stok' => $stok_kurang);
        $this->db->where('kode_buku', $kode);
        $this->db->update('buku', $jml_stok);
    }

    function tersedia(){
        $kode=$this->input->post('kode');
        $query =$this->db->query("select * from tmp where kode_buku='$kode'");
        return $query->num_rows();
    }

    function jumlah_stok1($kode){
        $this->db->select('stok');
        $this->db->where('kode_buku', $kode);
        $jml_buku=$this->db->get('buku');
        return $jml_buku->row_array();
    }

    function stok_kembali($kode,$stok){
        
        $update = array('stok' => $stok,);
        $this->db->where('kode_buku', $kode);
        $this->db->update('buku', $update);

    }

    function getData(){
        return $this->db->get('transaksi');
    }

    function getTransaksi(){
        return $this->db->get('transaksi',3);
    }

    function cekBuku(){
        $nis=$this->input->post('nis');
        $kode=$this->input->post('kode_buku');
        $this->db->where('nis',$nis);
        $this->db->where('kode_buku',$kode);
        $query=$this->db->get('transaksi')->num_rows();
        return $query;
    }

    function getPeminjaman(){
        return $this->db->get("peminjaman");
    }

  
    function updateDenda($id,$denda){

        $this->db->where('id_transaksi', $id);
        $this->db->update('transaksi', array('keterangan'=>$denda));
    }
}
