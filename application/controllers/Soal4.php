<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal4 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('template');
    }

    public function index()
    {

        $data = [
            'page_title' => 'Soal Nomor 4',
            'kode_menu' => 'soal4'
        ];
        $data_barang = $this->db->get('barang')->result();
        $data['data_barang'] = $data_barang;
        $this->template->page('soal/soal4', $data);
    }

    public function tambah()
    {

        $data = [
            'page_title' => 'Soal Nomor 4',
            'kode_menu' => 'soal4'
        ];
        $this->template->page('soal/soal4_tambah', $data);
    }

    public function detail($id)
    {

        $data = [
            'page_title' => 'Soal Nomor 4',
            'kode_menu' => 'soal4'
        ];
        $barang = $this->db->where('id', $id)->get('barang')->row();
        $data['barang'] = $barang;
        $barang_foto = $this->db->where('id_barang', $id)->get('barang_foto')->result();
        $data['barang_foto'] = $barang_foto;
        $this->template->page('soal/soal4_detail', $data);
    }

    function submit()
    {
        $req = $this->input->post();
        $data = [
            'nama' => $req['nama_barang'],
            'harga' => $req['harga_barang'],
        ];
        $saved = $this->db->insert('barang', $data);
        if ($saved) {
            $response = ['status' => 'success', 'message' => 'Data Berhasil Ditambahkan'];
        } else {
            $response = ['status' => 'fail', 'message' => 'Data Gagal Ditambahkan'];
        }
        echo json_encode($response);
    }
}
