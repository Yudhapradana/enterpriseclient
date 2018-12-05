<?php
class M_anggota extends CI_Model{
    private $table="anggota";
    private $primary="nis";
    
    function semua($limit=10,$offset=0,$order_column='',$order_type='asc'){
        if(empty($order_column) || empty($order_type))
            $this->db->order_by($this->primary,'asc');
        else
            $this->db->order_by($order_column,$order_type);
        return $this->db->get($this->table,$limit,$offset);
    }
    
     function login($nis,$password){
        $this->db->where("nis",$nis);
        $this->db->where("password",$password);
        return $this->db->get("anggota");
    }

    function jumlah(){
        return $this->db->count_all($this->table);
    }
    
    function cek($kode){
        $this->db->where($this->primary,$kode);
        $query=$this->db->get($this->table);
        
        return $query;
    }
    
    function simpan($jenis){
        $this->db->insert($this->table,$jenis);
        return $this->db->insert_id();
    }

    function anggota(){
        return $this->db->get('anggota');
    }
    
    function update($kode,$jenis){
        $this->db->where($this->primary,$kode);
        $this->db->update($this->table,$jenis);
    }
    
    function hapus($kode){
        $this->db->where($this->primary,$kode);
        $this->db->delete($this->table);
    }
    
    function cari($cari){
        $this->db->like($this->primary,$cari);
        $this->db->or_like("nama",$cari);
        return $this->db->get($this->table);
    }

    function petugas($id){
        $this->db->where('user',$id);
        $query = $this->db->get('petugas');
        return $query;
    }

     public function listing() {
        $this->db->select('*');
        $this->db->from('anggota');
        $query = $this->db->get();
        return $query->result();
 }
}