<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class cekOngkirController extends Controller
{
    public function getOngkir(Request $request){
        $client = new Client();
        $res = $client->request('POST', env('API_ONGKIR').'/starter/cost', [
            'headers' => [
                    "key" =>env('API_KEY')
            ],
            'form_params' =>[
                "origin" => "54",
                "destination" => $request->city,
                "weight" => $request->weight,
                "courier" => 'jne',
            ]
        ]);
        return $res->getBody()->getContents();
    }
    public function getProvince(){
        $client = new Client();
        $res = $client->request('GET', env('API_ONGKIR').'/starter/province', [
            'headers' => [
                    "key" =>env('API_KEY')
                ]
        ]);
        return $res->getBody()->getContents();
    }
    public function getCity($province_id){
        $client = new Client();
        $res = $client->request('GET', env('API_ONGKIR').'/starter/city?province='.$province_id, [
            'headers' => [
                    "key" =>env('API_KEY')
                ]
        ]);
        return $res->getBody()->getContents();
    }
}
