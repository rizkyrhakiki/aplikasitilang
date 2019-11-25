<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Symfony\Component\Debug\Tests\Fixtures\CaseMismatch;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $client = new Client();

        $response = $client->get('http://127.0.0.1:8000/dataInfoTilang');
        $responseBody = $response->getBody()->getContents();

        $apiResponse = json_decode($responseBody, true);
        return view('beranda', compact('apiResponse'));
    }
}
