<?php
class M_Laporan extends CI_Model{
    #code
    
    function semuaAnggota(){
        return $this->db->get("anggota");
    }
    
    function semuaBuku(){
        return $this->db->get("buku");
    }
    
    function detailpeminjaman($tanggal1,$tanggal2){
        return $this->db->query("select * from transaksi where tanggal_pinjam between '$tanggal1' and '$tanggal2' group by id_transaksi");
    }
    
    function detail_pinjam($id){
        $this->db->select("*");
        $this->db->from("transaksi");
        $this->db->where("id_transaksi",$id);
        $this->db->join("buku","buku.kode_buku=transaksi.kode_buku");
        return $this->db->get();
    }
    
    function detailpengembalian($tanggal1,$tanggal2){
        return $this->db->query("select * from pengembalian where tgl_pengembalian between '$tanggal1' and '$tanggal2' group by id_transaksi");
    }

    function jumlahPeminjaman(){
        return $this->db->get('transaksi')->num_rows();
    }

    function jumlahPengembalian(){
        return $this->db->get('pengembalian')->num_rows();
    }

    function jumlahAnggota(){
        return $this->db->get('anggota')->num_rows();
    }

    function anggotaMeminjam(){
        return $this->db->query('select distinct nis from transaksi')->num_rows();
    }


    // function kategori(){
    //     $query=$this->db->query("SELECT count(*) as jumlah ,buku.kategori as kategori FROM `transaksi` INNER JOIN buku on transaksi.kode_buku=buku.kode_buku 
    //         GROUP BY buku.kategori;");
    //     return $query->result();
    // }

     function kategori(){
        $query=$this->db->query("SELECT count(*) as jumlah ,buku.kategori as kategori FROM `transaksi` INNER JOIN buku on transaksi.kode_buku=buku.kode_buku 
            GROUP BY buku.kategori;");
        return $query->result();
    }
    // function bukuDipinjam(){
    //     return $this->db->query('select * from transaksi t inner join pengembalian p on t.id_transaksi=p.id_transaksi');
    // }    
}
