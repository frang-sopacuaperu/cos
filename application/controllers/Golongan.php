<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Golongan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Golongan_model', 'gol');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Golongan';
        $data['user_admin'] = $this->db->get_where('user_admin', ['NAMA' =>
        $this->session->userdata('NAMA')])->row_array();

        $data['golongan'] = $this->gol->getGolongan();
        $this->template->load('template', 'golongan/index', $data);
    }
}
