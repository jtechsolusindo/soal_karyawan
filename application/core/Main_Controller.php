<?php
class Main_Controller extends CI_Controller
{
    public $id_user;

    public function __construct()
    {
        parent::__construct();
        $this->cek_login();
    }

    public function cek_login()
    {
        if (!$this->session->has_userdata('session_jschool')) {
            $this->session->set_flashdata('alert', "Silahkan Login Terlebih Dahulu");
            redirect('login');
        } else {
            $dt_session = $this->get_session();
            $this->id_user = $dt_session->ID;
        }
    }

    public function get_session()
    {
        $session = $this->session->userdata('session_jschool');
        return $session;
    }

    public function destroy_session()
    {
        return $this->session->unset_userdata('session_jschool');
    }
}
