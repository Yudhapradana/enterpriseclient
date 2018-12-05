<?php
class M_Pengembalian extends CI_Model{
    
    function semua(){
        return $this->db->get('pengembalian', 3);
    }

    function cariTransaksi($no){
        $query=$this->db->query("select a.*,b.nama from transaksi a,
                                anggota b
                                where a.id_transaksi='$no' and a.id_transaksi
                                not in(select id_transaksi from pengembalian)
                                and a.nis=b.nis");
        return $query;
    }
    
    function tampilBuku($no){
        $query=$this->db->query("select a.*,b.judul,b.pengarang
                                from transaksi a,buku b
                                where a.id_transaksi='$no' and
                                a.id_transaksi not in(select id_transaksi from pengembalian)
                                and a.kode_buku=b.kode_buku");
        return $query;
    }
    
    function simpan($info){
        $this->db->insert("pengembalian",$info);
    }
    
    function update($no,$update){
        $this->db->where("id_transaksi",$no);
        $this->db->update("transaksi",$update);
    }
    
    function cari_by_nis($nis){
        $query=$this->db->query("select * from transaksi where id_transaksi
                                not in(select id_transaksi from pengembalian)
                                and nis like'%$nis%' group by nis");
        return $query;
    }

    function hapusPeminjaman($id){
        $this->db->where("id_transaksi", $id);
        $this->db->delete("peminjaman");
    }

    function cariBuku($id_transaksi){
        return $this->db->query("select buku.kode_buku, buku.stok from buku inner join transaksi on buku.kode_buku=transaksi.kode_buku where transaksi.id_transaksi='$id_transaksi'");
    }
    // function tambahStok($id_buku,$stok){
    //     $update = array('stok' => $stok);
    //     $this->db->update('buku', $update);
    // }

    // function cariStok($kode_buku){
    //     $this->db->select('stok');
    //     $this->db->where('kode_buku', $kode_buku);
    //     return $this->db->get('buku');
    // }

    function kembali_stok($id,$stok){
        $this->db->where('kode_buku', $id);
        $this->db->update('buku', array('stok'=>$stok));
        // print_r($id);
        // die();
    }


    function denda($tgl_kembali){
        $hari_ini= date('d-m-Y');
        $selisih = $hari_ini-$tgl_kembali;
        return $selisih;
    }
}