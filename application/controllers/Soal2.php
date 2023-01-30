<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soal2 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('template');
    }

    public function index()
    {
        $data = [
            'page_title' => 'Soal Nomor 2',
            'kode_menu' => 'soal2',
        ];
        $this->template->page('soal/soal2', $data);
    }
}
