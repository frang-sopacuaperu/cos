<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Auth extends MY_Controller
{
    private $_client;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Auth_model', 'auth');

        $this->_client = new Client([
            'base_uri' => 'http://localhost/api-pos-server/api/',
        ]);
    }

    // NOTES*
    // group_hak_akses = user_role
    // hak_akses_form = user_access_menu
    //---------------------------------------------------------------------------//

    public function login()
    {
        $this->form_validation->set_rules('NAMA', 'Nama', 'trim|required|min_length[5]|max_length[30]');
        $this->form_validation->set_rules('PASS', 'PASS', 'trim|required|min_length[6]', [
            'min_length' => 'Password terlalu pendek!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'COS Login';
            $this->load->view('auth/login', $data);
        } else {
            $this->_login();
            $this->verify();
        }
    }

    private function _login()
    {
        $nama = $this->input->post('NAMA');
        $pass = $this->input->post('PASS');

        $data = [
            'NAMA' => $nama,
            'PASS' => $pass,
        ];

        $headers = [
            'Authorization' => 'Bearer ',
            'Accept'        => 'application/json',
        ];

        $response = $this->_client->request('POST', 'auth/login', [
            'form_params' => $data,
            'headers' => $headers,
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        $this->session->set_userdata('Bearer Token', $result['token']);

        $data['token'] = $this->session->userdata('Bearer Token');
        // var_dump($data);
        return $result;
    }

    public function registration()
    {
        $this->form_validation->set_rules('NAMA', 'Nama', 'trim|required|min_length[5]|max_length[30]');
        $this->form_validation->set_rules('PASS', 'PASS', 'trim|required|min_length[6]', [
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('ALAMAT', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('WILAYAH_ID', 'Wilayah', 'trim|required');
        $this->form_validation->set_rules('TELEPON', 'Telepon', 'trim|required|numeric');
        $this->form_validation->set_rules('NO_REKENING', 'No. Rekening', 'trim|required|numeric');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $this->load->view('auth/registration', $data);
        } else {
            $data = [
                'NAMA' => htmlspecialchars($this->input->post('NAMA', true)),
                'PASS' => password_hash($this->input->post('PASS'), PASSWORD_DEFAULT),
                'IS_AKTIF' => 1,
                'GROUP_HAK_AKSES_ID' => 2,
                'ALAMAT' => $this->input->post('ALAMAT'),
                'WILAYAH_ID' => $this->input->post('WILAYAH_ID'),
                'TELEPON' => htmlspecialchars($this->input->post('TELEPON', true)),
                'NO_REKENING' => htmlspecialchars($this->input->post('NO_REKENING', true)),
                'GAJI_POKOK' => 0,
                'IS_SHOW_INFO_HUTANG_PIUTANG' => 0,
                'IS_SHOW_PROFIT' => 0,
                'IS_ALLOW_UPDATE_PLAFON' => 0,
            ];

            $this->db->insert('user_admin', $data);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Congratulations!</strong> Your account has been created. Please Login
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('auth/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('NAMA');
        $this->session->unset_userdata('GROUP_HAK_AKSES_ID');

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Anda Sudah Logout!</strong> Terima kasih.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );
        redirect('auth/login');
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
