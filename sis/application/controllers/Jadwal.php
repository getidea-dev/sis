<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    //pages
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('jadwal/index');
        $this->load->view('template/footer');
    }
}
