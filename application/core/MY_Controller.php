<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class MY_Controller extends CI_Controller
{
    public $_client;

    public function __construct()
    {
        parent::__construct();

        $headers = [
            'Authorization' => 'Bearer ' . $this->session->userdata('Bearer Token'),
            'Accept'        => 'application/json',
        ];

        $this->_client = new Client([
            'headers' => $headers,
            'base_uri' => 'http://localhost/api-pos-server/api/',
        ]);
    }
}
