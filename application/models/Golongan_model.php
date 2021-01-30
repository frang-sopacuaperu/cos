<?php

use GuzzleHttp\Client;

defined('BASEPATH') or exit('No direct script access allowed');

class Golongan_Model extends CI_Model
{

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/api-pos-server/api/',
            'headers' => [
                'content-type' => 'application/x-www-form-urlencoded',
                'Authorization' => 'Bearer',
            ]
        ]);

        // pak maksudku di bagian ini gini,
        // - aku mau panggil atau get atau request tokennya yang uda di generate di apinya, masih error ya pak, kurang gimana pak?
    }

    public function getGolongan()
    {
        $response = $this->_client->request('GET', 'golongan');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }
}

/* End of file Golongan_Model.php */
