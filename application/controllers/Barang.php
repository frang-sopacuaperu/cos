<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $response = $this->_client->request('GET', 'barang');

        $result = json_decode($response->getBody()->getContents(), true);
        $this->template->load('template', 'barang/index', $result);
    }

    public function create_barang()
    {
        $response = $this->_client->request('GET', 'golongan');

        $golongan = json_decode($response->getBody()->getContents(), true);

        $response = $this->_client->request('GET', 'subgolongan');

        $subgolongan = json_decode($response->getBody()->getContents(), true);

        $response = $this->_client->request('GET', 'supplier');

        $supplier = json_decode($response->getBody()->getContents(), true);

        $response = $this->_client->request('GET', 'lokasi');

        $lokasi = json_decode($response->getBody()->getContents(), true);

        $result['golongan'] = $golongan['data'];
        $result['subgolongan'] = $subgolongan['data'];
        $result['supplier'] = $supplier['data'];
        $result['lokasi'] = $lokasi['data'];

        $this->form_validation->set_rules('KODE', 'Kode Barang', 'trim|required|numeric');
        $this->form_validation->set_rules('NAMA', 'Nama', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('STOK', 'Stok', 'trim|required|numeric');
        $this->form_validation->set_rules('MIN_STOK', 'Stok Minimal', 'trim|required|numeric');
        $this->form_validation->set_rules('MAX_STOK', 'Stok Maksimal', 'trim|required|numeric');
        $this->form_validation->set_rules('HARGA_BELI', 'Harga Beli', 'trim|required|numeric');
        $this->form_validation->set_rules('GOLONGAN_ID', 'Golongan', 'trim|required');
        $this->form_validation->set_rules('LOKASI_ID', 'Lokasi', 'trim|required');
        $this->form_validation->set_rules('SUPPLIER_ID', 'Supplier', 'trim|required');
        $this->form_validation->set_rules('STOK_AWAL', 'Stok Awal', 'trim|required|numeric');
        $this->form_validation->set_rules('GARANSI', 'Garansi', 'trim');
        $this->form_validation->set_rules('SUB_GOLONGAN_ID', 'Sub Golongan', 'trim|required');
        $this->form_validation->set_rules('KODE_BARCODE', 'Barcode', 'trim|required|numeric');
        $this->form_validation->set_rules('TGL_TRANSAKSI', 'Tanggal Transaksi', 'trim');
        $this->form_validation->set_rules('DISKON_GENERAL', 'Diskon General', 'trim|numeric');
        $this->form_validation->set_rules('DISKON_SILVER', 'Diskon Silver', 'trim|numeric');
        $this->form_validation->set_rules('DISKON_GOLD', 'Diskon Gold', 'trim|numeric');
        $this->form_validation->set_rules('POIN', 'Poin', 'trim|numeric');
        $this->form_validation->set_rules('IS_WAJIB_ISI_IMEI', 'Wajib Isi IMEI', 'trim');
        $this->form_validation->set_rules('GUNA', 'Guna', 'trim|numeric');
        $this->form_validation->set_rules('FOTO', 'Foto', 'trim|ext_in[FOTO.png.jpg]');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'barang/create', $result);
        } else {
            $array = [
                'KODE' => $this->input->post('KODE'),
                'KODE_BARCODE' => $this->input->post('KODE_BARCODE'),
                'NAMA' => $this->input->post('NAMA'),
                'GOLONGAN_ID' => $this->input->post('GOLONGAN_ID'),
                'SUB_GOLONGAN_ID' => $this->input->post('SUB_GOLONGAN_ID'),
                'SUPPLIER_ID' => $this->input->post('SUPPLIER_ID'),
                'STOK_AWAL' => $this->input->post('STOK_AWAL'),
                'STOK' => $this->input->post('STOK'),
                'DISKON_GENERAL' => $this->input->post('DISKON_GENERAL'),
                'DISKON_SILVER' => $this->input->post('DISKON_SILVER'),
                'DISKON_GOLD' => $this->input->post('DISKON_GOLD'),
                'HARGA_BELI' => $this->input->post('HARGA_BELI'),
                'MIN_STOK' => $this->input->post('MIN_STOK'),
                'MAX_STOK' => $this->input->post('MAX_STOK'),
                'GARANSI' => $this->input->post('GARANSI'),
                'POIN' => $this->input->post('POIN'),
                'IS_WAJIB_ISI_IMEI' => $this->input->post('IS_WAJIB_ISI_IMEI'),
                'LOKASI_ID' => $this->input->post('LOKASI_ID'),
            ];

            $response = $this->_client->request('POST', 'barang', [
                'form_params' => $array,
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Barang baru </strong> berhasil ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('barang');
        }
    }

    public function edit_barang($kode)
    {
        $response = $this->_client->request('GET', 'golongan');

        $golongan = json_decode($response->getBody()->getContents(), true);

        $response = $this->_client->request('GET', 'subgolongan');

        $subgolongan = json_decode($response->getBody()->getContents(), true);

        $response = $this->_client->request('GET', 'supplier');

        $supplier = json_decode($response->getBody()->getContents(), true);

        $response = $this->_client->request('GET', 'lokasi');

        $lokasi = json_decode($response->getBody()->getContents(), true);

        $response = $this->_client->request('GET', 'barang', [
            'query' => [
                'KODE' => $kode
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        $result['data'] = $result['data'][0];
        $result['golongan'] = $golongan['data'];
        $result['subgolongan'] = $subgolongan['data'];
        $result['supplier'] = $supplier['data'];
        $result['lokasi'] = $lokasi['data'];

        $this->form_validation->set_rules('NAMA', 'Nama', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('STOK', 'Stok', 'trim|required|numeric');
        $this->form_validation->set_rules('MIN_STOK', 'Stok Minimal', 'trim|required|numeric');
        $this->form_validation->set_rules('MAX_STOK', 'Stok Maksimal', 'trim|required|numeric');
        $this->form_validation->set_rules('HARGA_BELI', 'Harga Beli', 'trim|required|numeric');
        $this->form_validation->set_rules('GOLONGAN_ID', 'Golongan', 'trim|required');
        $this->form_validation->set_rules('LOKASI_ID', 'Lokasi', 'trim|required');
        $this->form_validation->set_rules('SUPPLIER_ID', 'Supplier', 'trim|required');
        $this->form_validation->set_rules('STOK_AWAL', 'Stok Awal', 'trim|required|numeric');
        $this->form_validation->set_rules('GARANSI', 'Garansi', 'trim');
        $this->form_validation->set_rules('SUB_GOLONGAN_ID', 'Sub Golongan', 'trim|required');
        $this->form_validation->set_rules('KODE_BARCODE', 'Barcode', 'trim|required|numeric');
        $this->form_validation->set_rules('TGL_TRANSAKSI', 'Tanggal Transaksi', 'trim');
        $this->form_validation->set_rules('DISKON_GENERAL', 'Diskon General', 'trim|numeric');
        $this->form_validation->set_rules('DISKON_SILVER', 'Diskon Silver', 'trim|numeric');
        $this->form_validation->set_rules('DISKON_GOLD', 'Diskon Gold', 'trim|numeric');
        $this->form_validation->set_rules('POIN', 'Poin', 'trim|numeric');
        $this->form_validation->set_rules('IS_WAJIB_ISI_IMEI', 'Wajib Isi IMEI', 'trim');
        $this->form_validation->set_rules('GUNA', 'Guna', 'trim|numeric');
        $this->form_validation->set_rules('FOTO', 'Foto', 'trim|ext_in[FOTO.png.jpg]');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'barang/edit', $result);
        } else {

            $response = $this->_client->request('PUT', 'barang', [
                'form_params' => [
                    'KODE' => $kode,
                    'KODE_BARCODE' => $this->input->post('KODE_BARCODE'),
                    'NAMA' => $this->input->post('NAMA'),
                    'GOLONGAN_ID' => $this->input->post('GOLONGAN_ID'),
                    'SUB_GOLONGAN_ID' => $this->input->post('SUB_GOLONGAN_ID'),
                    'SUPPLIER_ID' => $this->input->post('SUPPLIER_ID'),
                    'STOK_AWAL' => $this->input->post('STOK_AWAL'),
                    'STOK' => $this->input->post('STOK'),
                    'DISKON_GENERAL' => $this->input->post('DISKON_GENERAL'),
                    'DISKON_SILVER' => $this->input->post('DISKON_SILVER'),
                    'DISKON_GOLD' => $this->input->post('DISKON_GOLD'),
                    'HARGA_BELI' => $this->input->post('HARGA_BELI'),
                    'MIN_STOK' => $this->input->post('MIN_STOK'),
                    'MAX_STOK' => $this->input->post('MAX_STOK'),
                    'GARANSI' => $this->input->post('GARANSI'),
                    'POIN' => $this->input->post('POIN'),
                    'IS_WAJIB_ISI_IMEI' => $this->input->post('IS_WAJIB_ISI_IMEI'),
                    'LOKASI_ID' => $this->input->post('LOKASI_ID'),
                ]
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Barang </strong> berhasil diedit!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('barang');
        }
    }

    public function delete_barang($kode)
    {
        $response = $this->_client->request('DELETE', 'barang', [
            'form_params' => [
                'KODE' => $kode,
            ]
        ]);

        json_decode($response->getBody()->getContents(), true);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Barang terhapus!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );
        redirect('barang');
    }
}
