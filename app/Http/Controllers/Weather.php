<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class Weather extends Controller
{

    public function getWeather($city)
    {
        $url = 'https://search.naver.com/search.naver?query=날씨+동대문';

        $client = new Client();
    
        $crawler = $client->request('GET', $url);
        $crawler->filter('.info_data')->each(function ($node) {
            echo $node->text()."<br>";
        });
        
    }
    
}
