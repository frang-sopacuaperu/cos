<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $response = $this->_client->request('GET', 'customer');

        $result = json_decode($response->getBody()->getContents(), true);
        $this->template->load('template', 'customer/index', $result);
    }

    public function create_customer()
    {
        $response = $this->_client->request('GET', 'wilayah');

        $result = json_decode($response->getBody()->getContents(), true);

        $this->form_validation->set_rules('KODE', 'Kode', 'trim|required|numeric');
        $this->form_validation->set_rules('NAMA', 'Nama', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('ALAMAT', 'Alamat', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('KONTAK', 'Kontak', 'trim|required|numeric');
        $this->form_validation->set_rules('NPWP', 'NPWP', 'trim|required|numeric');
        $this->form_validation->set_rules('JATUH_TEMPO', 'Jatuh Tempo', 'trim|numeric');
        $this->form_validation->set_rules('WILAYAH_ID', 'Wilayah', 'trim|required');
        $this->form_validation->set_rules('DEF', 'Default', 'trim');
        $this->form_validation->set_rules('ALAMAT2', 'Alamat Ke 2', 'trim|min_length[4]');
        $this->form_validation->set_rules('KODE_BARCODE', 'Barcode', 'trim|required|numeric');
        $this->form_validation->set_rules('PLAFON_PIUTANG', 'Plafon Piutang', 'trim|numeric');
        // $this->form_validation->set_rules('TOTAL_PIUTANG', 'Total Piutang', 'trim|required');
        // $this->form_validation->set_rules('TOTAL_PEMBAYARAN_PIUTANG', 'Total Pembayaran Piutang', 'trim|required');
        $this->form_validation->set_rules('KOTA', 'Kota', 'trim|required');
        $this->form_validation->set_rules('TELEPON', 'No. HP', 'trim|required|numeric');
        $this->form_validation->set_rules('JENIS_ANGGOTA', 'Jenis Anggota', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'customer/create', $result);
        } else {
            $array = [
                'KODE' => $this->input->post('KODE'),
                'NAMA' => $this->input->post('NAMA'),
                'ALAMAT' => $this->input->post('ALAMAT'),
                'KONTAK' => $this->input->post('KONTAK'),
                'NPWP' => $this->input->post('NPWP'),
                'JATUH_TEMPO' => $this->input->post('JATUH_TEMPO'),
                'URUT' => $this->input->post('URUT'),
                'WILAYAH_ID' => $this->input->post('WILAYAH_ID'),
                'DEF' => $this->input->post('DEF'),
                'ALAMAT2' => $this->input->post('ALAMAT2'),
                'KODE_BARCODE' => $this->input->post('KODE_BARCODE'),
                'PLAFON_PIUTANG' => $this->input->post('PLAFON_PIUTANG'),
                'TOTAL_PIUTANG' => $this->input->post('TOTAL_PIUTANG'),
                'TOTAL_PEMBAYARAN_PIUTANG' => $this->input->post('TOTAL_PEMBAYARAN_PIUTANG'),
                'KOTA' => $this->input->post('KOTA'),
                'TELEPON' => $this->input->post('TELEPON'),
                'JENIS_ANGGOTA' => $this->input->post('JENIS_ANGGOTA'),
            ];

            $response = $this->_client->request('POST', 'customer', [
                'form_params' => $array,
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Customer baru </strong> berhasil ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('customer');
        }
    }

    public function edit_customer($kode)
    {
        $response = $this->_client->request('GET', 'wilayah');

        $results = json_decode($response->getBody()->getContents(), true);

        $response = $this->_client->request('GET', 'customer', [
            'query' => [
                'KODE' => $kode
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        $result['data'] = $result['data'][0];
        $result['wilayah'] = $results['data'];

        $this->form_validation->set_rules('NAMA', 'Nama', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('ALAMAT', 'Alamat', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('KONTAK', 'Kontak', 'trim|required|numeric');
        $this->form_validation->set_rules('NPWP', 'NPWP', 'trim|required|numeric');
        $this->form_validation->set_rules('JATUH_TEMPO', 'Jatuh Tempo', 'trim|numeric');
        $this->form_validation->set_rules('WILAYAH_ID', 'Wilayah', 'trim|required');
        $this->form_validation->set_rules('DEF', 'Default', 'trim');
        $this->form_validation->set_rules('ALAMAT2', 'Alamat Ke 2', 'trim|min_length[4]');
        $this->form_validation->set_rules('KODE_BARCODE', 'Barcode', 'trim|required|numeric');
        $this->form_validation->set_rules('PLAFON_PIUTANG', 'Plafon Piutang', 'trim|numeric');
        // $this->form_validation->set_rules('TOTAL_PIUTANG', 'Total Piutang', 'trim|required');
        // $this->form_validation->set_rules('TOTAL_PEMBAYARAN_PIUTANG', 'Total Pembayaran Piutang', 'trim|required');
        $this->form_validation->set_rules('KOTA', 'Kota', 'trim|required');
        $this->form_validation->set_rules('TELEPON', 'No. HP', 'trim|required|numeric');
        $this->form_validation->set_rules('JENIS_ANGGOTA', 'Jenis Anggota', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'customer/edit', $result);
        } else {
            $nama = $this->input->post('NAMA');
            $alamat = $this->input->post('ALAMAT');
            $kontak = $this->input->post('KONTAK');
            $npwp = $this->input->post('NPWP');
            $jat_tem = $this->input->post('JATUH_TEMPO');
            $ur = $this->input->post('URUT');
            $wil_id = $this->input->post('WILAYAH_ID');
            $def = $this->input->post('DEF');
            $alamat2 = $this->input->post('ALAMAT2');
            $barcode = $this->input->post('KODE_BARCODE');
            $plaf = $this->input->post('PLAFON_PIUTANG');
            $tot_piu = $this->input->post('TOTAL_PIUTANG');
            $tot_pem_piu = $this->input->post('TOTAL_PEMBAYARAN_PIUTANG');
            $kota = $this->input->post('KOTA');
            $telp = $this->input->post('TELEPON');
            $jen_go = $this->input->post('JENIS_ANGGOTA');

            $response = $this->_client->request('PUT', 'customer', [
                'form_params' => [
                    'KODE' => $kode,
                    'NAMA' => $nama,
                    'ALAMAT' => $alamat,
                    'KONTAK' => $kontak,
                    'NPWP' => $npwp,
                    'JATUH_TEMPO' => $jat_tem,
                    'URUT' => $ur,
                    'WILAYAH_ID' => $wil_id,
                    'DEF' => $def,
                    'ALAMAT2' => $alamat2,
                    'KODE_BARCODE' => $barcode,
                    'PLAFON_PIUTANG' => $plaf,
                    'TOTAL_PIUTANG' => $tot_piu,
                    'TOTAL_PEMBAYARAN_PIUTANG' => $tot_pem_piu,
                    'KOTA' => $kota,
                    'TELEPON' => $telp,
                    'JENIS_ANGGOTA' => $jen_go,
                ]
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Customer </strong> berhasil diedit!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('customer');
        }
    }

    public function delete_customer($kode)
    {
        $response = $this->_client->request('DELETE', 'customer', [
            'form_params' => [
                'KODE' => $kode,
            ]
        ]);

        json_decode($response->getBody()->getContents(), true);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Customer terhapus!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );
        redirect('customer');
    }
}
