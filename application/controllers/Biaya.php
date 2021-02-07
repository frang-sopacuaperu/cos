<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Biaya extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $response = $this->_client->request('GET', 'biaya');

        $result = json_decode($response->getBody()->getContents(), true);
        $this->template->load('template', 'biaya/index', $result);
    }

    public function create_biaya()
    {
        $this->form_validation->set_rules('KODE', 'KODE', 'trim|required');
        $this->form_validation->set_rules('KETERANGAN', 'KETERANGAN', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'biaya/create');
        } else {
            $array = [
                'KODE' => $this->input->post('KODE'),
                'KETERANGAN' => $this->input->post('KETERANGAN'),
            ];

            $response = $this->_client->request('POST', 'biaya', [
                'form_params' => $array,
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Biaya baru </strong> berhasil ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('biaya');
        }
    }

    public function edit_biaya($kode)
    {

        $response = $this->_client->request('GET', 'biaya', [
            'query' => [
                'KODE' => $kode
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        $result['data'] = $result['data'][0];

        $this->form_validation->set_rules('KETERANGAN', 'KETERANGAN', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'biaya/edit', $result);
        } else {
            $ket = $this->input->post('KETERANGAN');

            $response = $this->_client->request('PUT', 'biaya', [
                'form_params' => [
                    'KODE' => $kode,
                    'KETERANGAN' => $ket,
                ]
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Biaya </strong> berhasil diedit!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('biaya');
        }
    }

    public function delete_biaya($kode)
    {
        $response = $this->_client->request('DELETE', 'biaya', [
            'form_params' => [
                'KODE' => $kode,
            ]
        ]);

        json_decode($response->getBody()->getContents(), true);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Biaya terhapus!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );
        redirect('biaya');
    }
}
