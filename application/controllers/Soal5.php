<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Dompdf\Dompdf;
use Dompdf\Options;

class Soal5 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('template');
    }

    public function index()
    {

        $data = [
            'page_title' => 'Soal Nomor 5',
            'kode_menu' => 'soal5'
        ];
        $data_konsumen = $this->db->get('konsumen')->result();
        $data['data_konsumen'] = $data_konsumen;
        $this->template->page('soal/soal5', $data);
    }

    function export_pdf()
    {
        $paper_size = "A4";
        $orientation = "potrait";
        $data_konsumen = $this->db->get('konsumen')->result_array();
        $data['data_konsumen'] = $data_konsumen;
        $html = $this->load->view('data_konsumen_html', $data, TRUE);

        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper($paper_size, $orientation);
        $dompdf->render();
        ob_end_clean();
        $dompdf->stream('Laporan Konsumen', array('Attachment' => 0));
    }

    function export_excel()
    {
        $data_konsumen = $this->db->get('konsumen')->result();
        $data['data_konsumen'] = $data_konsumen;
        $this->load->view('data_konsumen_html', $data, TRUE);
        $nama_file = "Laporan Kas Harian Keuangan_" . time() . '.xls';
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=" . $nama_file);
    }
}
