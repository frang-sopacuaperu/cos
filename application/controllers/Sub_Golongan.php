<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sub_Golongan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $response = $this->_client->request('GET', 'subgolongan');

        $result = json_decode($response->getBody()->getContents(), true);
        $this->template->load('template', 'sub-golongan/index', $result);
    }

    public function create_sub_gol()
    {
        $this->form_validation->set_rules('KODE', 'KODE', 'trim|required');
        $this->form_validation->set_rules('KETERANGAN', 'KETERANGAN', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'sub-golongan/create');
        } else {
            $array = [
                'KODE' => $this->input->post('KODE'),
                'KETERANGAN' => $this->input->post('KETERANGAN'),
            ];

            $response = $this->_client->request('POST', 'subgolongan', [
                'form_params' => $array,
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Sub Golongan baru </strong> berhasil ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('sub_golongan');
        }
    }

    public function edit_sub_gol($kode)
    {
        $response = $this->_client->request('GET', 'subgolongan', [
            'query' => [
                'KODE' => $kode
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        $result['data'] = $result['data'][0];

        $this->form_validation->set_rules('KETERANGAN', 'KETERANGAN', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'sub-golongan/edit', $result);
        } else {
            $ket = $this->input->post('KETERANGAN');

            $response = $this->_client->request('PUT', 'subgolongan', [
                'form_params' => [
                    'KODE' => $kode,
                    'KETERANGAN' => $ket,
                ]
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Sub Golongan </strong> berhasil diedit!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('sub_golongan');
        }
    }

    public function delete_sub_gol($kode)
    {
        $response = $this->_client->request('DELETE', 'subgolongan', [
            'form_params' => [
                'KODE' => $kode,
            ]
        ]);

        json_decode($response->getBody()->getContents(), true);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Sub Golongan terhapus!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );
        redirect('sub_golongan');
    }
}
