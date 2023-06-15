<?php

namespace App\Http\Controllers\legacy;

use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function getApiData($urlApi)
    {
        // return Http::dd()->get('https://dummyjson.com/products/');
        // $client = new Client();
        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Api-key' => 'dbee514fdf7229ed74560e89a7ed795c' ,
            'X-Signature' => hash('sha256', 'dbee514fdf7229ed74560e89a7ed795c'.'e428aaf141'.time())
        ];
        $response = Http::withHeaders($headers)->get($urlApi);
        return $response->json();
    }
}
