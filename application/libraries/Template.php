<?php
defined('BASEPATH') or exit('No direct sript access allowed');

class Template
{
    function __construct()
    {
        $this->ci = &get_instance();
    }

    function page($content, $data)
    {
        $layout['content'] = $this->ci->load->view($content, $data, TRUE);
        $layout['navbar'] = $this->ci->load->view('layout/navbar', $data, TRUE);
        $this->ci->load->view('layout/layout', $layout);
    }
}
