<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
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
        }
    }

    private function _login()
    {
        $nama = $this->input->post('NAMA');
        $pass = $this->input->post('PASS');

        $user = $this->db->get_where('user_admin', [
            'NAMA' => $nama
        ])->row_array();

        if ($user) {
            if ($user['IS_AKTIF'] == 1) {
                if (password_verify($pass, $user['PASS'])) {
                    $data = [
                        'NAMA' => $user['NAMA'],
                        'GROUP_HAK_AKSES_ID' => $user['GROUP_HAK_AKSES_ID']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['GROUP_HAK_AKSES_ID'] == 1) {
                        redirect('dashboard');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>PASSWORD!</strong> anda salah, coba lagi!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>'
                    );
                    redirect('auth/login');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Nama!</strong> anda belum aktif, silahkan hubungi admin!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                );
                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Akun!</strong> anda belum terdaftar, silahkan daftar dulu!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('auth/login');
        }
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
