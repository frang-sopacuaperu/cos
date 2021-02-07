<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lokasi extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $response = $this->_client->request('GET', 'lokasi');

        $result = json_decode($response->getBody()->getContents(), true);
        $this->template->load('template', 'lokasi/index', $result);
    }

    public function create_lok()
    {
        $this->form_validation->set_rules('KODE', 'KODE', 'trim|required');
        $this->form_validation->set_rules('KETERANGAN', 'KETERANGAN', 'trim|required');
        $this->form_validation->set_rules('DEF', 'DEF', 'trim');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'lokasi/create');
        } else {
            $array = [
                'KODE' => $this->input->post('KODE'),
                'KETERANGAN' => $this->input->post('KETERANGAN'),
                'DEF' => $this->input->post('DEF'),
            ];

            $response = $this->_client->request('POST', 'lokasi', [
                'form_params' => $array,
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Lokasi baru </strong> berhasil ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('lokasi');
        }
    }

    public function edit_lok($kode)
    {

        $response = $this->_client->request('GET', 'lokasi', [
            'query' => [
                'KODE' => $kode
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        $result['data'] = $result['data'][0];

        $this->form_validation->set_rules('KETERANGAN', 'KETERANGAN', 'trim|required');
        $this->form_validation->set_rules('DEF', 'DEF', 'trim');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'lokasi/edit', $result);
        } else {
            $ket = $this->input->post('KETERANGAN');
            $def = $this->input->post('DEF');

            $response = $this->_client->request('PUT', 'lokasi', [
                'form_params' => [
                    'KODE' => $kode,
                    'KETERANGAN' => $ket,
                    'DEF' => $def,
                ]
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Lokasi </strong> berhasil diedit!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('lokasi');
        }
    }

    public function delete_lok($kode)
    {
        $response = $this->_client->request('DELETE', 'lokasi', [
            'form_params' => [
                'KODE' => $kode,
            ]
        ]);

        json_decode($response->getBody()->getContents(), true);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Lokasi terhapus!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );
        redirect('lokasi');
    }
}
