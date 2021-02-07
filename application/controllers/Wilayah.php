<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wilayah extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $response = $this->_client->request('GET', 'wilayah');

        $result = json_decode($response->getBody()->getContents(), true);
        $this->template->load('template', 'wilayah/index', $result);
    }

    public function create_wil()
    {
        $this->form_validation->set_rules('KODE', 'KODE', 'trim|required');
        $this->form_validation->set_rules('KETERANGAN', 'KETERANGAN', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'wilayah/create');
        } else {
            $array = [
                'KODE' => $this->input->post('KODE'),
                'KETERANGAN' => $this->input->post('KETERANGAN'),
            ];

            $response = $this->_client->request('POST', 'wilayah', [
                'form_params' => $array,
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Wilayah baru </strong> berhasil ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('wilayah');
        }
    }

    public function edit_wil($kode)
    {

        $response = $this->_client->request('GET', 'wilayah', [
            'query' => [
                'KODE' => $kode
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        $result['data'] = $result['data'][0];

        $this->form_validation->set_rules('KETERANGAN', 'KETERANGAN', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'wilayah/edit', $result);
        } else {
            $ket = $this->input->post('KETERANGAN');

            $response = $this->_client->request('PUT', 'wilayah', [
                'form_params' => [
                    'KODE' => $kode,
                    'KETERANGAN' => $ket,
                ]
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Wilayah </strong> berhasil diedit!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('wilayah');
        }
    }

    public function delete_wil($kode)
    {
        $response = $this->_client->request('DELETE', 'wilayah', [
            'form_params' => [
                'KODE' => $kode,
            ]
        ]);

        json_decode($response->getBody()->getContents(), true);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Wilayah terhapus!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );
        redirect('wilayah');
    }
}
