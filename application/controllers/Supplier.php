<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $response = $this->_client->request('GET', 'supplier');

        $result = json_decode($response->getBody()->getContents(), true);
        $this->template->load('template', 'supplier/index', $result);
    }

    public function create_supplier()
    {
        $response = $this->_client->request('GET', 'wilayah');

        $result = json_decode($response->getBody()->getContents(), true);

        $this->form_validation->set_rules('KODE', 'KODE', 'trim|required|numeric');
        $this->form_validation->set_rules('NAMA', 'NAMA', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('ALAMAT', 'ALAMAT', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('KONTAK', 'KONTAK', 'trim|required|numeric');
        $this->form_validation->set_rules('NPWP', 'NPWP', 'trim|required|numeric');
        $this->form_validation->set_rules('JATUH_TEMPO', 'JATUH_TEMPO', 'trim|numeric');
        $this->form_validation->set_rules('WILAYAH_ID', 'WILAYAH_ID', 'trim|required');
        $this->form_validation->set_rules('DEF', 'DEF', 'trim');
        $this->form_validation->set_rules('ALAMAT2', 'ALAMAT2', 'trim|min_length[4]');
        $this->form_validation->set_rules('KODE_BARCODE', 'KODE_BARCODE', 'trim|required|numeric');
        $this->form_validation->set_rules('PLAFON_HUTANG', 'PLAFON_HUTANG', 'trim|numeric');
        // $this->form_validation->set_rules('TOTAL_HUTANG', 'TOTAL_HUTANG', 'trim|required');
        // $this->form_validation->set_rules('TOTAL_PELUNASAN_HUTANG', 'TOTAL_PELUNASAN_HUTANG', 'trim|required');
        $this->form_validation->set_rules('TELEPON', 'TELEPON', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'supplier/create', $result);
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
                'PLAFON_HUTANG' => $this->input->post('PLAFON_HUTANG'),
                'TOTAL_HUTANG' => $this->input->post('TOTAL_HUTANG'),
                'TOTAL_PELUNASAN_HUTANG' => $this->input->post('TOTAL_PELUNASAN_HUTANG'),
                'TELEPON' => $this->input->post('TELEPON'),
            ];

            $response = $this->_client->request('POST', 'supplier', [
                'form_params' => $array,
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Supplier baru </strong> berhasil ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('supplier');
        }
    }

    public function edit_supplier($kode)
    {
        $response = $this->_client->request('GET', 'wilayah');

        $results = json_decode($response->getBody()->getContents(), true);

        $response = $this->_client->request('GET', 'supplier', [
            'query' => [
                'KODE' => $kode
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        $result['data'] = $result['data'][0];
        $result['wilayah'] = $results['data'];

        $this->form_validation->set_rules('NAMA', 'NAMA', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('ALAMAT', 'ALAMAT', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('KONTAK', 'KONTAK', 'trim|required|numeric');
        $this->form_validation->set_rules('NPWP', 'NPWP', 'trim|required|numeric');
        $this->form_validation->set_rules('JATUH_TEMPO', 'JATUH_TEMPO', 'trim|numeric');
        $this->form_validation->set_rules('WILAYAH_ID', 'WILAYAH_ID', 'trim|required');
        $this->form_validation->set_rules('DEF', 'DEF', 'trim');
        $this->form_validation->set_rules('ALAMAT2', 'ALAMAT2', 'trim|min_length[4]');
        $this->form_validation->set_rules('KODE_BARCODE', 'KODE_BARCODE', 'trim|required|numeric');
        $this->form_validation->set_rules('PLAFON_HUTANG', 'PLAFON_HUTANG', 'trim|numeric');
        // $this->form_validation->set_rules('TOTAL_HUTANG', 'TOTAL_HUTANG', 'trim|required');
        // $this->form_validation->set_rules('TOTAL_PELUNASAN_HUTANG', 'TOTAL_PELUNASAN_HUTANG', 'trim|required');
        $this->form_validation->set_rules('TELEPON', 'TELEPON', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'supplier/edit', $result);
        } else {
            $nama = $this->input->post('NAMA');
            $alamat = $this->input->post('ALAMAT');
            $kontak = $this->input->post('KONTAK');
            $npwp = $this->input->post('NPWP');
            $jat_tem = $this->input->post('JATUH_TEMPO');
            $urut = $this->input->post('URUT');
            $wil_id = $this->input->post('WILAYAH_ID');
            $def = $this->input->post('DEF');
            $alamat2 = $this->input->post('ALAMAT2');
            $barcode = $this->input->post('KODE_BARCODE');
            $plaf_hut = $this->input->post('PLAFON_HUTANG');
            $tot_hut = $this->input->post('TOTAL_HUTANG');
            $tot_pel_hut = $this->input->post('TOTAL_PELUNASAN_HUTANG');
            $telp = $this->input->post('TELEPON');


            $response = $this->_client->request('PUT', 'supplier', [
                'form_params' => [
                    'KODE' => $kode,
                    'NAMA' => $nama,
                    'ALAMAT' => $alamat,
                    'KONTAK' => $kontak,
                    'NPWP' => $npwp,
                    'JATUH_TEMPO' => $jat_tem,
                    'URUT' => $urut,
                    'WILAYAH_ID' => $wil_id,
                    'DEF' => $def,
                    'ALAMAT2' => $alamat2,
                    'KODE_BARCODE' => $barcode,
                    'PLAFON_HUTANG' => $plaf_hut,
                    'TOTAL_HUTANG' => $tot_hut,
                    'TOTAL_PELUNASAN_HUTANG' => $tot_pel_hut,
                    'TELEPON' => $telp,
                ]
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Supplier </strong> berhasil diedit!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('supplier');
        }
    }

    public function delete_supplier($kode)
    {
        $response = $this->_client->request('DELETE', 'supplier', [
            'form_params' => [
                'KODE' => $kode,
            ]
        ]);

        json_decode($response->getBody()->getContents(), true);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Supplier terhapus!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );
        redirect('supplier');
    }
}
