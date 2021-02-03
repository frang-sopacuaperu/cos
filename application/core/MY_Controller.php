<?php
defined('BASEPATH') or exit('No direct script access allowed');


class MY_Controller extends CI_Controller
{
    public function verify()
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
                }
                if ($pass == null) {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>WRONG!</strong> credential!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>'
                    );
                    redirect('auth/login');
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>WRONG!</strong> credential!
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
                    <strong>WRONG!</strong> credential!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                );
                redirect('auth/login');
            }
        }
        if ($nama == null) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>WRONG!</strong> credential!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('auth/login');
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>WRONG!</strong> credential!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('auth/login');
        }
    }
}
