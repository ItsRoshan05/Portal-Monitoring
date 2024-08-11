<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('client.index');
    }

    public function predict(Request $request)
    {
        $client = new Client([
            'verify' => false
        ]);
        
        $response = $client->post('https://itsroshan05.pythonanywhere.com/predict', [
            'json' => ['text' => $request->input('text')]
        ]);
    
        $result = json_decode($response->getBody(), true);
        $prediction = $result['prediction'];
        return view('client.index', ['prediction' => $prediction]);
    }
}
