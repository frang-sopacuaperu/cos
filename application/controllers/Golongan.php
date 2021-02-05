<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Golongan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $response = $this->_client->request('GET', 'golongan');

        $data = json_decode($response->getBody()->getContents(), true);
        $this->template->load('template', 'golongan/index', $data);
    }

    public function create_gol()
    {
        $this->form_validation->set_rules('KODE', 'KODE', 'trim|required');
        $this->form_validation->set_rules('KETERANGAN', 'KETERANGAN', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'golongan/create');
        } else {
            $array = [
                'KODE' => $this->input->post('KODE'),
                'KETERANGAN' => $this->input->post('KETERANGAN'),
            ];

            $response = $this->_client->request('POST', 'golongan', [
                'form_params' => $array,
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Golongan baru </strong> berhasil ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('golongan');
        }
    }

    public function gol_id($kode)
    {
        $response = $this->_client->request('GET', 'golongan', [
            'query' => [
                'KODE' => $kode
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        $data = $result['data'][0];
        // var_dump($data);
        $this->template->load('template', 'golongan/detail', $data);
    }

    public function edit_gol($kode)
    {

        $this->form_validation->set_rules('KETERANGAN', 'KETERANGAN', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'golongan/edit');
        } else {
            $ket = $this->input->post('KETERANGAN');

            $response = $this->_client->request('PUT', 'golongan', [
                'form_params' => [
                    'KODE' => $kode,
                    'KETERANGAN' => $ket,
                ]
            ]);

            json_decode($response->getBody()->getContents(), true);

            $array = array(
                'key' => 'value'
            );

            $this->session->set_userdata($array);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Golongan </strong> berhasil diedit!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('golongan');
        }
    }

    public function delete_gol($kode)
    {
        $response = $this->_client->request('DELETE', 'golongan', [
            'form_params' => [
                'KODE' => $kode,
            ]
        ]);

        json_decode($response->getBody()->getContents(), true);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Golongan terhapus!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );
        redirect('golongan');
    }
}
