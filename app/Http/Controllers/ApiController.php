<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $client = new Client();

        $response = $client->get('http://127.0.0.1:8000/dataInfoTilang');
        $responseBody = $response->getBody()->getContents();

        $apiResponse = json_decode($responseBody, true);
        return view('beranda', compact('apiResponse'));
    }
}
