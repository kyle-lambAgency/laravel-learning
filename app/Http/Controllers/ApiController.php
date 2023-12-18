<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function fetchMarvelCharacters()
    {
        $credentials = app('marvel.api.credentials');

        $apiKey = $credentials['apiKey'];
        $timestamp = $credentials['timestamp'];
        $hash = $credentials['hash'];

        // Make a request to the Marvel Comics API
        $response = Http::get('http://gateway.marvel.com/v1/public/characters', [
            'apikey' => $apiKey,
            'ts' => $timestamp,
            'hash' => $hash,
        ]);

        // Assuming the response is in JSON format
        $data = $response->json();

        return view('data', ['data' => $data]);
    }
}
