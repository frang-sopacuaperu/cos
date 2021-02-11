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

        $this->form_validation->set_rules('KODE', 'KODE', 'trim|required|numeric');
        $this->form_validation->set_rules('NAMA', 'NAMA', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('SATUAN', 'SATUAN', 'trim');
        $this->form_validation->set_rules('STOK', 'STOK', 'trim|required|numeric');
        $this->form_validation->set_rules('MIN_STOK', 'MIN_STOK', 'trim|required|numeric');
        $this->form_validation->set_rules('MAX_STOK', 'MAX_STOK', 'trim|required|numeric');
        $this->form_validation->set_rules('HARGA_BELI', 'HARGA_BELI', 'trim|required|numeric');
        $this->form_validation->set_rules('HARGA_JUAL', 'HARGA_JUAL', 'trim|required|numeric');
        $this->form_validation->set_rules('IS_UPDATE_HARGA_JUAL', 'IS_UPDATE_HARGA_JUAL', 'trim');
        $this->form_validation->set_rules('GOLONGAN_ID', 'GOLONGAN_ID', 'trim|required');
        $this->form_validation->set_rules('LOKASI_ID', 'LOKASI_ID', 'trim|required');
        $this->form_validation->set_rules('SUPPLIER_ID', 'SUPPLIER_ID', 'trim|required');
        $this->form_validation->set_rules('STOK_AWAL', 'STOK_AWAL', 'trim|required|numeric');
        $this->form_validation->set_rules('GARANSI', 'GARANSI', 'trim');
        $this->form_validation->set_rules('SUB_GOLONGAN_ID', 'SUB_GOLONGAN_ID', 'trim|required');
        $this->form_validation->set_rules('KODE_BARCODE', 'KODE_BARCODE', 'trim|required|numeric');
        $this->form_validation->set_rules('BIJI1', 'BIJI1', 'trim|numeric');
        $this->form_validation->set_rules('SATUAN2', 'SATUAN2', 'trim|numeric');
        $this->form_validation->set_rules('BIJI2', 'BIJI2', 'trim|numeric');
        $this->form_validation->set_rules('SATUAN3', 'SATUAN3', 'trim|numeric');
        $this->form_validation->set_rules('BIJI3', 'BIJI3', 'trim|numeric');
        $this->form_validation->set_rules('SATUAN4', 'SATUAN4', 'trim|numeric');
        $this->form_validation->set_rules('BIJI4', 'BIJI4', 'trim|numeric');
        $this->form_validation->set_rules('TGL_TRANSAKSI', 'TGL_TRANSAKSI', 'trim');
        $this->form_validation->set_rules('DISKON_GENERAL', 'DISKON_GENERAL', 'trim|numeric');
        $this->form_validation->set_rules('DISKON_SILVER', 'DISKON_SILVER', 'trim|numeric');
        $this->form_validation->set_rules('DISKON_GOLD', 'DISKON_GOLD', 'trim|numeric');
        $this->form_validation->set_rules('POIN', 'POIN', 'trim|numeric');
        $this->form_validation->set_rules('IS_WAJIB_ISI_IMEI', 'IS_WAJIB_ISI_IMEI', 'trim');
        $this->form_validation->set_rules('GUNA', 'GUNA', 'trim|numeric');
        $this->form_validation->set_rules('FOTO', 'FOTO', 'trim|ext_in[FOTO.png.jpg]');

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
                'SATUAN' => $this->input->post('SATUAN'),
                'SATUAN2' => $this->input->post('SATUAN2'),
                'SATUAN3' => $this->input->post('SATUAN3'),
                'SATUAN4' => $this->input->post('SATUAN4'),
                'BIJI1' => $this->input->post('BIJI1'),
                'BIJI2' => $this->input->post('BIJI2'),
                'BIJI3' => $this->input->post('BIJI3'),
                'BIJI4' => $this->input->post('BIJI4'),
                'STOK_AWAL' => $this->input->post('STOK_AWAL'),
                'STOK' => $this->input->post('STOK'),
                'DISKON_GENERAL' => $this->input->post('DISKON_GENERAL'),
                'DISKON_SILVER' => $this->input->post('DISKON_SILVER'),
                'DISKON_GOLD' => $this->input->post('DISKON_GOLD'),
                'HARGA_BELI' => $this->input->post('HARGA_BELI'),
                'HARGA_JUAL' => $this->input->post('HARGA_JUAL'),
                'MIN_STOK' => $this->input->post('MIN_STOK'),
                'MAX_STOK' => $this->input->post('MAX_STOK'),
                'GARANSI' => $this->input->post('GARANSI'),
                'POIN' => $this->input->post('POIN'),
                'IS_UPDATE_HARGA_JUAL' => $this->input->post('IS_UPDATE_HARGA_JUAL'),
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

        $this->form_validation->set_rules('NAMA', 'NAMA', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('SATUAN', 'SATUAN', 'trim');
        $this->form_validation->set_rules('STOK', 'STOK', 'trim|required|numeric');
        $this->form_validation->set_rules('MIN_STOK', 'MIN_STOK', 'trim|required|numeric');
        $this->form_validation->set_rules('MAX_STOK', 'MAX_STOK', 'trim|required|numeric');
        $this->form_validation->set_rules('HARGA_BELI', 'HARGA_BELI', 'trim|required|numeric');
        $this->form_validation->set_rules('HARGA_JUAL', 'HARGA_JUAL', 'trim|required|numeric');
        $this->form_validation->set_rules('IS_UPDATE_HARGA_JUAL', 'IS_UPDATE_HARGA_JUAL', 'trim');
        $this->form_validation->set_rules('GOLONGAN_ID', 'GOLONGAN_ID', 'trim|required');
        $this->form_validation->set_rules('LOKASI_ID', 'LOKASI_ID', 'trim|required');
        $this->form_validation->set_rules('SUPPLIER_ID', 'SUPPLIER_ID', 'trim|required');
        $this->form_validation->set_rules('STOK_AWAL', 'STOK_AWAL', 'trim|required|numeric');
        $this->form_validation->set_rules('GARANSI', 'GARANSI', 'trim');
        $this->form_validation->set_rules('SUB_GOLONGAN_ID', 'SUB_GOLONGAN_ID', 'trim|required');
        $this->form_validation->set_rules('KODE_BARCODE', 'KODE_BARCODE', 'trim|required|numeric');
        $this->form_validation->set_rules('BIJI1', 'BIJI1', 'trim|numeric');
        $this->form_validation->set_rules('SATUAN2', 'SATUAN2', 'trim|numeric');
        $this->form_validation->set_rules('BIJI2', 'BIJI2', 'trim|numeric');
        $this->form_validation->set_rules('SATUAN3', 'SATUAN3', 'trim|numeric');
        $this->form_validation->set_rules('BIJI3', 'BIJI3', 'trim|numeric');
        $this->form_validation->set_rules('SATUAN4', 'SATUAN4', 'trim|numeric');
        $this->form_validation->set_rules('BIJI4', 'BIJI4', 'trim|numeric');
        $this->form_validation->set_rules('TGL_TRANSAKSI', 'TGL_TRANSAKSI', 'trim');
        $this->form_validation->set_rules('DISKON_GENERAL', 'DISKON_GENERAL', 'trim|numeric');
        $this->form_validation->set_rules('DISKON_SILVER', 'DISKON_SILVER', 'trim|numeric');
        $this->form_validation->set_rules('DISKON_GOLD', 'DISKON_GOLD', 'trim|numeric');
        $this->form_validation->set_rules('POIN', 'POIN', 'trim|numeric');
        $this->form_validation->set_rules('IS_WAJIB_ISI_IMEI', 'IS_WAJIB_ISI_IMEI', 'trim');
        $this->form_validation->set_rules('GUNA', 'GUNA', 'trim|numeric');
        $this->form_validation->set_rules('FOTO', 'FOTO', 'trim|ext_in[FOTO.png.jpg]');

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
                    'SATUAN' => $this->input->post('SATUAN'),
                    'SATUAN2' => $this->input->post('SATUAN2'),
                    'SATUAN3' => $this->input->post('SATUAN3'),
                    'SATUAN4' => $this->input->post('SATUAN4'),
                    'BIJI1' => $this->input->post('BIJI1'),
                    'BIJI2' => $this->input->post('BIJI2'),
                    'BIJI3' => $this->input->post('BIJI3'),
                    'BIJI4' => $this->input->post('BIJI4'),
                    'STOK_AWAL' => $this->input->post('STOK_AWAL'),
                    'STOK' => $this->input->post('STOK'),
                    'DISKON_GENERAL' => $this->input->post('DISKON_GENERAL'),
                    'DISKON_SILVER' => $this->input->post('DISKON_SILVER'),
                    'DISKON_GOLD' => $this->input->post('DISKON_GOLD'),
                    'HARGA_BELI' => $this->input->post('HARGA_BELI'),
                    'HARGA_JUAL' => $this->input->post('HARGA_JUAL'),
                    'MIN_STOK' => $this->input->post('MIN_STOK'),
                    'MAX_STOK' => $this->input->post('MAX_STOK'),
                    'GARANSI' => $this->input->post('GARANSI'),
                    'POIN' => $this->input->post('POIN'),
                    'IS_UPDATE_HARGA_JUAL' => $this->input->post('IS_UPDATE_HARGA_JUAL'),
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
