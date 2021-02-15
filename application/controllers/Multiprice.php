<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Multiprice extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $response = $this->_client->request('GET', 'multiprice');

        $result = json_decode($response->getBody()->getContents(), true);
        $this->template->load('template', 'multiprice/index', $result);
    }

    public function create_multiprice()
    {
        $this->form_validation->set_rules('BARANG_ID', 'Kode Barang', 'trim|required|numeric');
        $this->form_validation->set_rules('HARGA_KE', 'Harga Ke-', 'trim|required|numeric');
        $this->form_validation->set_rules('JUMLAH', 'Jumlah', 'trim|required|numeric');
        $this->form_validation->set_rules('HARGA_JUAL', 'Harga Jual', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'multiprice/create');
        } else {
            $array = [
                'BARANG_ID' => $this->input->post('BARANG_ID'),
                'HARGA_KE' => $this->input->post('HARGA_KE'),
                'JUMLAH' => $this->input->post('JUMLAH'),
                'HARGA_JUAL' => $this->input->post('HARGA_JUAL'),
            ];

            $response = $this->_client->request('POST', 'multiprice', [
                'form_params' => $array,
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Multiprice baru </strong> berhasil ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('multiprice');
        }
    }

    public function edit_multiprice($id)
    {

        $response = $this->_client->request('GET', 'multiprice', [
            'query' => [
                'BARANG_ID' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        $result['data'] = $result['data'][0];

        $this->form_validation->set_rules('HARGA_KE', 'Harga Ke-', 'trim|required|numeric');
        $this->form_validation->set_rules('JUMLAH', 'Jumlah', 'trim|required|numeric');
        $this->form_validation->set_rules('HARGA_JUAL', 'Harga Jual', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'multiprice/edit', $result);
        } else {
            $harke = $this->input->post('HARGA_KE');
            $jum = $this->input->post('JUMLAH');
            $harju = $this->input->post('HARGA_JUAL');

            $response = $this->_client->request('PUT', 'multiprice', [
                'form_params' => [
                    'BARANG_ID' => $id,
                    'HARGA_KE' => $harke,
                    'JUMLAH' => $jum,
                    'HARGA_JUAL' => $harju,
                ]
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Multiprice </strong> berhasil diedit!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('multiprice');
        }
    }

    public function delete_multiprice($id)
    {
        $response = $this->_client->request('DELETE', 'multiprice', [
            'form_params' => [
                'BARANG_ID' => $id,
            ]
        ]);

        json_decode($response->getBody()->getContents(), true);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Multiprice terhapus!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );
        redirect('multiprice');
    }
}
