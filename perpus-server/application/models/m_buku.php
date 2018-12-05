<?php
class M_buku extends CI_Model{
    private $table="buku";
    private $primary="kode_buku";
    
    function semua($limit=10,$offset=0,$order_column='',$order_type='asc'){
        if(empty($order_column) || empty($order_type))
            $this->db->order_by($this->primary,'asc');
        else
            $this->db->order_by($order_column,$order_type);
        return $this->db->get($this->table,$limit,$offset);
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
        $this->db->or_like("judul",$cari);
        return $this->db->get($this->table);
    }

    function buku(){
        $query= $this->db->query("SELECT * FROM buku order by tanggal_input desc limit 3");
         return $query;
    }

    function details(){
        return $this->db->where('kode_buku',$this->uri->segment(3))->get('buku');
    }

    function favorit(){
        //$this->db->join('buku', 'transaksi.column = buku.column', 'inner');
        $query=$this->db->query('SELECT transaksi.kode_buku,COUNT(*) as jml,buku.image,buku.judul,buku.pengarang FROM transaksi inner join buku on transaksi.kode_buku=buku.kode_buku group by kode_buku ORDER BY `jml` DESC limit 3');
        
        return $query->result();
    }

    function kategori(){
        return $this->db->get('kategori_buku')->result_array();
    }

    function insert_kategori(){
        $object = array('nama_kategori' => $this->input->post('kategori'));
        $this->db->insert('kategori_buku', $object);
    }

    function cek_kategori($kode){
        $this->db->where('id_kategori',$kode);
        $query=$this->db->get('kategori_buku');      
        return $query;
    }
    
    function hapus_kategori($kode){
        $this->db->where('id_kategori',$kode);
        $this->db->delete('kategori_buku');
    }

    function update_kategori($kode,$jenis){
        $this->db->where('id_kategori',$kode);
        $this->db->update('kategori_buku',$jenis);
    }

    function cari_kategori($cari){
        $this->db->like('id_kategori',$cari);
        $this->db->or_like("nama_kategori",$cari);
        return $this->db->get('kategori_buku');
    }
    function data_buku(){
        return $this->db->query('SELECT * FROM `kategori_buku` order by id_kategori desc limit 1')->result();
    }

    function cariKategori($nama){
        $this->db->select('id_kategori');
        $this->db->where("nama_kategori",$nama);
        return $this->db->get("kategori_buku");
    }

    function cekKode($nama){
        return $this->db->query("SELECT kode_buku FROM `buku` WHERE kategori='$nama' ORDER by kode_buku desc limit 1;");
    }
    

    function kodeKategori($nama){
        $this->db->select('nama_kategori');
        $this->db->where('id_kategori', $nama);
        return $this->db->get('kategori_buku');
    }
}