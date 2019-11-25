<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;


class ApiController extends Controller
{
    public function index()
    {
        $client = new Client();

        $response = $client->request('GET','https://aplikasitilang.herokuapp.com/public/dataInfoTilang');
        $responseBody = $response->getBody()->getContents();

        $apiResponse = json_decode($responseBody, true);
        return view('beranda', compact('apiResponse'));
    }
}
