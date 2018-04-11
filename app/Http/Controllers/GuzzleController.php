<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GuzzleController extends Controller
{
    public function getRemoteData(){
        $client = new Client([
            'headers' => ['content-type' => 'application/json', 'Accept' => 'application/json']
        ]);
        
        $res = $client->request('GET', 'https://kc.kobotoolbox.org/api/v1/data', [
            'auth' => ['edx_2017', 'monkobotoolbox']
        ]);

        
        return $res->getBody();
    }
}