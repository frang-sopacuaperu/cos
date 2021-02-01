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
        ]);
    }

    public function getGolongan()
    {
        // $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJUSEVfQ0xBSU0iLCJhdWQiOiJUSEVfQVVESUVOQ0UiLCJpYXQiOjE2MTIxNTA5MzEsIm5iZiI6MTYxMjE1MDk0MSwiZXhwIjoxNjEyMTU0NTMxLCJkYXRhIjp7Ik5BTUEiOiJBZG1pbiIsIklTX0FLVElGIjoiMSIsIkdST1VQX0hBS19BS1NFU19JRCI6IjEiLCJBTEFNQVQiOiJKYWthcnRhIiwiV0lMQVlBSF9JRCI6IjEiLCJURUxFUE9OIjoiMDgyMTEyMzQ1Njc4IiwiTk9fUkVLRU5JTkciOiIyMjIyMjIyMjIyMjIyIiwiR0FKSV9QT0tPSyI6IjAiLCJJU19TSE9XX0lORk9fSFVUQU5HX1BJVVRBTkciOiIwIiwiSVNfU0hPV19QUk9GSVQiOiIwIiwiSVNfQUxMT1dfVVBEQVRFX1BMQUZPTiI6IjAifX0.PJDEzmZY1YKSGxyzn_msPghyRfnGl_UwTkb8Tv3rG0Q';
        // $headers = [
        //     'Authorization' => 'Bearer ' . $token,
        //     'Accept'        => 'application/json',
        // ];

        $response = $this->_client->request('GET', 'golongan', [
            // 'headers' => $headers,
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }
}

/* End of file Golongan_Model.php */
