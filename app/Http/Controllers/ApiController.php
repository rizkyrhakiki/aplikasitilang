<?php

namespace App\Http\Controllers;

use App\Models\InformasiTilang;
use GuzzleHttp\Client;


class ApiController extends Controller
{
    private $informasiTilangRepository;

    public function index()
    {
        $infoTilang = InformasiTilang::all();
        $client = new Client();

        $response = $client->request('GET','https://aplikasitilang.herokuapp.com/public/dataInfoTilang');
        $responseBody = $response->getBody()->getContents();

        $apiResponse = json_decode($responseBody, true);
        return view('beranda', compact('infoTilang'));
    }
}
