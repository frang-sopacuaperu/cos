<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jasa extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $response = $this->_client->request('GET', 'jasa');

        $result = json_decode($response->getBody()->getContents(), true);
        $this->template->load('template', 'jasa/index', $result);
    }

    public function create_jasa()
    {
        $this->form_validation->set_rules('KODE', 'Kode', 'trim|required');
        $this->form_validation->set_rules('KETERANGAN', 'Keterangan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'jasa/create');
        } else {
            $array = [
                'KODE' => $this->input->post('KODE'),
                'KETERANGAN' => $this->input->post('KETERANGAN'),
            ];

            $response = $this->_client->request('POST', 'jasa', [
                'form_params' => $array,
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Jasa baru </strong> berhasil ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('jasa');
        }
    }

    public function edit_jasa($kode)
    {

        $response = $this->_client->request('GET', 'jasa', [
            'query' => [
                'KODE' => $kode
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        $result['data'] = $result['data'][0];

        $this->form_validation->set_rules('KETERANGAN', 'Keterangan', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'jasa/edit', $result);
        } else {
            $ket = $this->input->post('KETERANGAN');

            $response = $this->_client->request('PUT', 'jasa', [
                'form_params' => [
                    'KODE' => $kode,
                    'KETERANGAN' => $ket,
                ]
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Jasa </strong> berhasil diedit!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('jasa');
        }
    }

    public function delete_jasa($kode)
    {
        $response = $this->_client->request('DELETE', 'jasa', [
            'form_params' => [
                'KODE' => $kode,
            ]
        ]);

        json_decode($response->getBody()->getContents(), true);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Jasa terhapus!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );
        redirect('jasa');
    }
}
