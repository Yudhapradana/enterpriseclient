<?php 	
require APPPATH .'/libraries/REST_Controller.php';


class Rest extends REST_Controller {

	
	function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model('m_anggota');
    }


    // show data peminjam
    function index_get() {
        $id = $this->get('id_transaksi');
        $nis= $this->get('nis');
        if ($id == '') {
            $this->db->where('nis', $nis);
            $this->db->order_by('status', 'asc');
            $buku = $this->db->get('transaksi',10)->result();
        } else {
            $this->db->where('nis', $nis);
            $this->db->where('id_transaksi', $id);
            $buku = $this->db->get('transaksi')->result();
        }
        $this->response($buku, 200);
    }

    function buku_get(){
        $buku = $this->db->get('buku',10)->result();
        $this->response($buku, 200);
    }

    function proses_get(){
        $nis=$this->get('nis');
        $password=$this->get('pass');
        $cek=$this->m_anggota->login($nis,md5($password));
        if($cek->num_rows()>0){
                //login berhasil, buat session
                // $this->session->set_userdata('username',$username);
                // redirect('dashboard');
                $this->response(array('status' =>'login berhasil','session' => $nis),201);
            }else{
                //login gagal
                // $this->session->set_flashdata('message','Username atau password salah');
                // redirect('web');
                // die();
                $this->response(array('status' =>'login gagal'),201);
            }
    }


    function profile_get(){
        $id=$this->get('id');
        $id=$this->get('nis');       
        if($id ==''){
            $user=$this->db->get('anggota')->result();    
        }else{
            $this->db->where('nis', $id);
            $user=$this->db->get('anggota')->result();
        }
        $this->response($user,200);
    }

    function bukuPinjam_get(){
        $id=$this->get('nis');
        if ($id=='') {
            $buku=$this->db->get('transaksi')->result();
        }else{
            $this->db->select('judul');
            $this->db->where('transaksi.status', 'N');
            $this->db->where('transaksi.nis', $id);
            $this->db->join('buku', 'buku.kode_buku = transaksi.kode_buku', 'INNER');
            $buku=$this->db->get('transaksi')->result();
        }
        $this->response($buku,200);
    }


    // insert new data to peminjam
    // function index_post() {
    //     $data = array(
    //                 'nim'           => $this->post('nim'),
    //                 'nama'          => $this->post('nama'),
    //                 'id_jurusan'    => $this->post('id_jurusan'),
    //                 'alamat'        => $this->post('alamat'));
    //     $insert = $this->db->insert('peminjam', $data);
    //     if ($insert) {
    //         $this->response($data, 200);
    //     } else {
    //         $this->response(array('status' => 'fail', 502));
    //     }
    // }

    // update data peminjam
    function anggota_put() {
        $nis = $this->put('nis');
        $data = array(
                    'nis'       => $nis,
                    'nama'      => $this->put('nama'),
                    'ttl'=> $this->put('tgl'),
                    'kelas'=> $this->put('kls'),
                    'image'    => $this->put('img'));
        $this->db->where('nis', $nis);
        $update = $this->db->update('anggota', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // // delete peminjam
    // function index_delete() {
    //     $nim = $this->delete('nim');
    //     $this->db->where('nim', $nim);
    //     $delete = $this->db->delete('peminjam');
    //     if ($delete) {
    //         $this->response(array('status' => 'success'), 201);
    //     } else {
    //         $this->response(array('status' => 'fail', 502));
    //     }
    // }

}

/* End of file Client_peminjaman.php */
/* Location: ./application/controllers/Client_peminjaman.php */
?>