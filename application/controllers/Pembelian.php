<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembelian extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $response = $this->_client->request('GET', 'beli');

        $result = json_decode($response->getBody()->getContents(), true);
        $this->template->load('template', 'beli/index', $result);
    }

    public function create_beli()
    {
        $this->form_validation->set_rules('NOTA', 'Nota', 'trim|required');
        $this->form_validation->set_rules('LOKASI_ID', 'Lokasi', 'trim|required');
        $this->form_validation->set_rules('SUPPLIER_ID', 'Supplier', 'trim|required');
        $this->form_validation->set_rules('STATUS_NOTA', 'Status Nota', 'trim|required');
        $this->form_validation->set_rules('STATUS_BAYAR', 'Status Bayar', 'trim');
        $this->form_validation->set_rules('TANGGAL', 'Tanggal', 'trim|required');
        $this->form_validation->set_rules('TEMPO', 'Tempo', 'trim');
        $this->form_validation->set_rules('DISKON', 'Diskon', 'trim|numeric');
        $this->form_validation->set_rules('PPN', 'PPN', 'trim|numeric');
        $this->form_validation->set_rules('KETERANGAN', 'Keterangan', 'trim');
        $this->form_validation->set_rules('USER_ADMIN', 'User Admin', 'trim');
        // $this->form_validation->set_rules('NOTA_JUAL', 'Nota Jual', 'trim');
        $this->form_validation->set_rules('TOTAL_NOTA', 'Total Nota', 'trim');
        // $this->form_validation->set_rules('TOTAL_PELUNASAN_NOTA', 'Total Pelunasan Nota', 'trim');
        $this->form_validation->set_rules('PROFIT', 'Profit', 'trim');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'beli/create');
        } else {
            $array = [
                'NOTA' => $this->input->post('NOTA'),
                'LOKASI_ID' => $this->input->post('LOKASI_ID'),
                'SUPPLIER_ID' => $this->input->post('SUPPLIER_ID'),
                'STATUS_NOTA' => $this->input->post('STATUS_NOTA'),
                'STATUS_BAYAR' => $this->input->post('STATUS_BAYAR'),
                'TANGGAL' => $this->input->post('TANGGAL'),
                'TEMPO' => $this->input->post('TEMPO'),
                'DISKON' => $this->input->post('DISKON'),
                'PPN' => $this->input->post('PPN'),
                'KETERANGAN' => $this->input->post('KETERANGAN'),
                'USER_ADMIN' => $this->input->post('USER_ADMIN'),
                // 'NOTA_JUAL' => $this->input->post('NOTA_JUAL'),
                'TOTAL_NOTA' => $this->input->post('TOTAL_NOTA'),
                // 'TOTAL_PELUNASAN_NOTA' => $this->input->post('TOTAL_PELUNASAN_NOTA'),
                'PROFIT' => $this->input->post('PROFIT'),
            ];

            $response = $this->_client->request('POST', 'beli', [
                'form_params' => $array,
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Pembelian baru </strong> berhasil ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('beli');
        }
    }

    public function edit_beli($nota)
    {

        $response = $this->_client->request('GET', 'beli', [
            'query' => [
                'NOTA' => $nota
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        $result['data'] = $result['data'][0];

        $this->form_validation->set_rules('LOKASI_ID', 'Lokasi', 'trim|required');
        $this->form_validation->set_rules('SUPPLIER_ID', 'Supplier', 'trim|required');
        $this->form_validation->set_rules('STATUS_NOTA', 'Status Nota', 'trim|required');
        $this->form_validation->set_rules('STATUS_BAYAR', 'Status Bayar', 'trim');
        $this->form_validation->set_rules('TANGGAL', 'Tanggal', 'trim|required');
        $this->form_validation->set_rules('TEMPO', 'Tempo', 'trim');
        $this->form_validation->set_rules('DISKON', 'Diskon', 'trim|numeric');
        $this->form_validation->set_rules('PPN', 'PPN', 'trim|numeric');
        $this->form_validation->set_rules('KETERANGAN', 'Keterangan', 'trim');
        $this->form_validation->set_rules('USER_ADMIN', 'User Admin', 'trim');
        // $this->form_validation->set_rules('NOTA_JUAL', 'Nota Jual', 'trim');
        $this->form_validation->set_rules('TOTAL_NOTA', 'Total Nota', 'trim');
        // $this->form_validation->set_rules('TOTAL_PELUNASAN_NOTA', 'Total Pelunasan Nota', 'trim');
        $this->form_validation->set_rules('PROFIT', 'Profit', 'trim');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'beli/edit', $result);
        } else {

            $response = $this->_client->request('PUT', 'beli', [
                'form_params' => [
                    'NOTA' => $nota,
                    'LOKASI_ID' => $this->input->post('LOKASI_ID'),
                    'SUPPLIER_ID' => $this->input->post('SUPPLIER_ID'),
                    'STATUS_NOTA' => $this->input->post('STATUS_NOTA'),
                    'STATUS_BAYAR' => $this->input->post('STATUS_BAYAR'),
                    'TANGGAL' => $this->input->post('TANGGAL'),
                    'TEMPO' => $this->input->post('TEMPO'),
                    'DISKON' => $this->input->post('DISKON'),
                    'PPN' => $this->input->post('PPN'),
                    'KETERANGAN' => $this->input->post('KETERANGAN'),
                    'USER_ADMIN' => $this->input->post('USER_ADMIN'),
                    // 'NOTA_JUAL' => $this->input->post('NOTA_JUAL'),
                    'TOTAL_NOTA' => $this->input->post('TOTAL_NOTA'),
                    // 'TOTAL_PELUNASAN_NOTA' => $this->input->post('TOTAL_PELUNASAN_NOTA'),
                    'PROFIT' => $this->input->post('PROFIT'),
                ]
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Pembelian </strong> berhasil diedit!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('beli');
        }
    }

    public function delete_beli($nota)
    {
        $response = $this->_client->request('DELETE', 'beli', [
            'form_params' => [
                'NOTA' => $nota,
            ]
        ]);

        json_decode($response->getBody()->getContents(), true);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Pembelian terhapus!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );
        redirect('beli');
    }
}
