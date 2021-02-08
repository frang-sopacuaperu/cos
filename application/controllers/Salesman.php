<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Salesman extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $response = $this->_client->request('GET', 'salesman');

        $result = json_decode($response->getBody()->getContents(), true);
        $this->template->load('template', 'salesman/index', $result);
    }

    public function create_salesman()
    {
        $this->form_validation->set_rules('KODE', 'KODE', 'trim|required|numeric');
        $this->form_validation->set_rules('NAMA', 'NAMA', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('ALAMAT', 'ALAMAT', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('TELEPON', 'TELEPON', 'trim|required|numeric');
        $this->form_validation->set_rules('ALAMAT2', 'ALAMAT2', 'trim|min_length[4]');
        $this->form_validation->set_rules('TELEPON2', 'TELEPON2', 'trim|numeric');
        $this->form_validation->set_rules('NO_REKENING', 'NO_REKENING', 'trim|required|numeric');
        $this->form_validation->set_rules('PLAFON_PIUTANG', 'PLAFON_PIUTANG', 'trim|numeric');
        // $this->form_validation->set_rules('TOTAL_PIUTANG', 'TOTAL_PIUTANG', 'trim|required');
        // $this->form_validation->set_rules('TOTAL_PEMBAYARAN_PIUTANG', 'TOTAL_PEMBAYARAN_PIUTANG', 'trim|required');
        // $this->form_validation->set_rules('TOTAL_NOTA_PENJUALAN', 'TOTAL_NOTA_PENJUALAN', 'trim|required|numeric');
        // $this->form_validation->set_rules('TOTAL_ITEM_PENJUALAN', 'TOTAL_ITEM_PENJUALAN', 'trim|required|numeric');
        // $this->form_validation->set_rules('OPERATOR_ID', 'OPERATOR_ID', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'salesman/create');
        } else {
            $array = [
                'KODE' => $this->input->post('KODE'),
                'NAMA' => $this->input->post('NAMA'),
                'ALAMAT' => $this->input->post('ALAMAT'),
                'TELEPON' => $this->input->post('TELEPON'),
                'ALAMAT2' => $this->input->post('ALAMAT2'),
                'TELEPON2' => $this->input->post('TELEPON2'),
                'NO_REKENING' => $this->input->post('NO_REKENING'),
                'URUT' => $this->input->post('URUT'),
                'PLAFON_PIUTANG' => $this->input->post('PLAFON_PIUTANG'),
                'TOTAL_PIUTANG' => $this->input->post('TOTAL_PIUTANG'),
                'TOTAL_PEMBAYARAN_PIUTANG' => $this->input->post('TOTAL_PEMBAYARAN_PIUTANG'),
                'TOTAL_NOTA_PENJUALAN' => $this->input->post('TOTAL_NOTA_PENJUALAN'),
                'TOTAL_ITEM_PENJUALAN' => $this->input->post('TOTAL_ITEM_PENJUALAN'),
                'OPERATOR_ID' => $this->input->post('OPERATOR_ID'),
            ];

            $response = $this->_client->request('POST', 'salesman', [
                'form_params' => $array,
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Salesman baru </strong> berhasil ditambahkan!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('salesman');
        }
    }

    public function edit_salesman($kode)
    {
        $response = $this->_client->request('GET', 'salesman', [
            'query' => [
                'KODE' => $kode
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        $result['data'] = $result['data'][0];

        $this->form_validation->set_rules('NAMA', 'NAMA', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('ALAMAT', 'ALAMAT', 'trim|required|min_length[4]');
        $this->form_validation->set_rules('TELEPON', 'TELEPON', 'trim|required|numeric');
        $this->form_validation->set_rules('ALAMAT2', 'ALAMAT2', 'trim|min_length[4]');
        $this->form_validation->set_rules('TELEPON2', 'TELEPON2', 'trim|numeric');
        $this->form_validation->set_rules('NO_REKENING', 'NO_REKENING', 'trim|required|numeric');
        $this->form_validation->set_rules('PLAFON_PIUTANG', 'PLAFON_PIUTANG', 'trim|numeric');
        // $this->form_validation->set_rules('TOTAL_PIUTANG', 'TOTAL_PIUTANG', 'trim|required');
        // $this->form_validation->set_rules('TOTAL_PEMBAYARAN_PIUTANG', 'TOTAL_PEMBAYARAN_PIUTANG', 'trim|required');
        // $this->form_validation->set_rules('TOTAL_NOTA_PENJUALAN', 'TOTAL_NOTA_PENJUALAN', 'trim|required|numeric');
        // $this->form_validation->set_rules('TOTAL_ITEM_PENJUALAN', 'TOTAL_ITEM_PENJUALAN', 'trim|required|numeric');
        // $this->form_validation->set_rules('OPERATOR_ID', 'OPERATOR_ID', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->template->load('template', 'salesman/edit', $result);
        } else {
            $nama =   $this->input->post('NAMA');
            $alamat =    $this->input->post('ALAMAT');
            $telp =    $this->input->post('TELEPON');
            $alamat2  = $this->input->post('ALAMAT2');
            $telp2 =  $this->input->post('TELEPON2');
            $norek =  $this->input->post('NO_REKENING');
            $urut = $this->input->post('URUT');
            $plaf = $this->input->post('PLAFON_PIUTANG');
            $tot_plaf = $this->input->post('TOTAL_PIUTANG');
            $tot_pem_plaf =  $this->input->post('TOTAL_PEMBAYARAN_PIUTANG');
            $tot_not_penj =   $this->input->post('TOTAL_NOTA_PENJUALAN');
            $tot_it_penj =   $this->input->post('TOTAL_ITEM_PENJUALAN');
            $op =  $this->input->post('OPERATOR_ID');


            $response = $this->_client->request('PUT', 'salesman', [
                'form_params' => [
                    'KODE' => $kode,
                    'NAMA' => $nama,
                    'ALAMAT' => $alamat,
                    'TELEPON' => $telp,
                    'ALAMAT2' => $alamat2,
                    'TELEPON2' => $telp2,
                    'NO_REKENING' => $norek,
                    'URUT' => $urut,
                    'PLAFON_PIUTANG' => $plaf,
                    'TOTAL_PIUTANG' => $tot_plaf,
                    'TOTAL_PEMBAYARAN_PIUTANG' => $tot_pem_plaf,
                    'TOTAL_NOTA_PENJUALAN' => $tot_not_penj,
                    'TOTAL_ITEM_PENJUALAN' => $tot_it_penj,
                    'OPERATOR_ID' => $op,
                ]
            ]);

            json_decode($response->getBody()->getContents(), true);

            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Salesman </strong> berhasil diedit!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('salesman');
        }
    }

    public function delete_salesman($kode)
    {
        $response = $this->_client->request('DELETE', 'salesman', [
            'form_params' => [
                'KODE' => $kode,
            ]
        ]);

        json_decode($response->getBody()->getContents(), true);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Salesman terhapus!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>'
        );
        redirect('salesman');
    }
}
