<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Menu_model', 'menu');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Managemen Menu';
        $data['user_admin'] = $this->db->get_where('user_admin', ['NAMA' =>
        $this->session->userdata('NAMA')])->row_array();

        $data['menu_level1'] = $this->db->get('menu_level1')->result_array();

        $this->template->load('template', 'menu/index', $data);
    }
}
