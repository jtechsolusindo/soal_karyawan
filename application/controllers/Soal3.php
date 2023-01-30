<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal3 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('template');
    }

    public function index()
    {

        $data = [
            'page_title' => 'Soal Nomor 3',
            'kode_menu' => 'soal3'
        ];
        $data_pegawai = $this->db->get('data_pegawai')->result();
        $data['data_pegawai'] = $data_pegawai;
        $this->template->page('soal/soal3', $data);
    }
}
