<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Master';

        $data['user_admin'] = $this->db->get_where('user_admin', ['NAMA' =>
        $this->session->userdata('NAMA')])->row_array();

        $this->template->load('template', 'admin/dashboard', $data);
    }
}
