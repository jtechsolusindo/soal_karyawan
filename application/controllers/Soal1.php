<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal1 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('template');
    }

    public function index()
    {
        $data = [
            'page_title' => 'Soal Nomor 1',
            'kode_menu' => 'soal1'
        ];
        $this->template->page('soal/soal1', $data);
    }

    public function get_provinsi()
    {
        $data = $this->db->get('propinsi')->result();
        echo json_encode($data);
    }

    public function get_kota($id_propinsi)
    {
        $data = $this->db->where('propinsi', $id_propinsi)->get('kota')->result();
        echo json_encode($data);
    }
}
