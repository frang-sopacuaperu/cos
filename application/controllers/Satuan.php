<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Satuan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $response = $this->_client->request('GET', 'satuan');

        $result = json_decode($response->getBody()->getContents(), true);
        $this->template->load('template', 'satuan/index', $result);
    }

    public function create_satuan()
    {
        $this->form_validation->set_rules('KODE', 'Kode', 'trim');
        $this->form_validation->set_rules('NAMA', 'Nama', 'trim|required');
        $this->form_validation->set_rules('KONVERSI', 'Konversi', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'satuan/create');
        } else {
            $array = [
                'KODE' => $this->input->post('KODE'),
                'NAMA' => $this->input->post('NAMA'),
                'KONVERSI' => $this->input->post('KONVERSI'),
            ];

            $response = $this->_client->request('POST', 'satuan', [
                'form_params' => $array,
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Satuan baru </strong> berhasil ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('satuan');
        }
    }

    public function edit_satuan($kode)
    {

        $response = $this->_client->request('GET', 'satuan', [
            'query' => [
                'KODE' => $kode
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        $result['data'] = $result['data'][0];

        $this->form_validation->set_rules('NAMA', 'Nama', 'trim|required');
        $this->form_validation->set_rules('KONVERSI', 'Konversi', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'satuan/edit', $result);
        } else {
            $nama = $this->input->post('NAMA');
            $conv = $this->input->post('KONVERSI');

            $response = $this->_client->request('PUT', 'satuan', [
                'form_params' => [
                    'KODE' => $kode,
                    'NAMA' => $nama,
                    'KONVERSI' => $conv,
                ]
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Satuan </strong> berhasil diedit!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('satuan');
        }
    }

    public function delete_satuan($kode)
    {
        $response = $this->_client->request('DELETE', 'satuan', [
            'form_params' => [
                'KODE' => $kode,
            ]
        ]);

        json_decode($response->getBody()->getContents(), true);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Satuan terhapus!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );
        redirect('satuan');
    }
}
