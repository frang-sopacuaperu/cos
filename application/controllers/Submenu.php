<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Submenu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Submenu_model', 'submenu');
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Managemen Submenu';
        $data['user_admin'] = $this->db->get_where('user_admin', ['NAMA' =>
        $this->session->userdata('NAMA')])->row_array();

        $data['submenu'] = $this->submenu->getSubMenu();
        $this->template->load('template', 'submenu/index', $data);
    }

    public function tambahsubmenu()
    {
        $data['title'] = 'Tambah Submenu';
        $data['user_admin'] = $this->db->get_where('user_admin', ['NAMA' =>
        $this->session->userdata('NAMA')])->row_array();

        $data['menu_level1'] = $this->db->get('menu_level1')->result_array();

        $this->form_validation->set_rules('MENU_NAME', 'Nama Submenu', 'trim|required');
        $this->form_validation->set_rules('MENU_CAPTION', 'Caption Subemnu', 'trim|required');
        $this->form_validation->set_rules('MENU_ID_LEVEL1', 'ID Menu', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'submenu/tambah_submenu', $data);
        } else {
            $this->submenu->addSubMenu();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Submenu baru!</strong> berhasil ditambahkan
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('submenu');
        }
    }

    public function editsubmenu($id)
    {
        $data['title'] = 'Edit Submenu';
        $data['user_admin'] = $this->db->get_where('user_admin', ['NAMA' =>
        $this->session->userdata('NAMA')])->row_array();

        $data['menu_level2'] = $this->submenu->getSubMenuById($id);

        $data['menu_level1'] = $this->db->get('menu_level1')->result_array();

        $this->form_validation->set_rules('MENU_NAME', 'Nama Submenu', 'trim|required');
        $this->form_validation->set_rules('MENU_ID_LEVEL1', 'ID Menu', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'submenu/edit_submenu', $data);
        } else {
            $this->submenu->editSubMenu();
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Submenu berhasil</strong> diedit!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('submenu');
        }
    }

    public function deletesubmenu($id)
    {
        $this->submenu->deleteSubMenu($id);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Submenu terhapus!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );
        redirect('dsubmenu');
    }
}
