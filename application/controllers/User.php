<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Profile User';
        $data['user_admin'] = $this->db->get_where('user_admin', ['NAMA' =>
        $this->session->userdata('NAMA')])->row_array();

        $this->template->load('template', 'user/profile', $data);
        // echo 'Welcome ' . $data['user_admin']['NAMA'];
    }
}
