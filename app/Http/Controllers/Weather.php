<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class Weather extends Controller
{

    public function getWeather($city)
    {
        $url = 'https://search.naver.com/search.naver?query=날씨+' . $city;

        $client = new Client();
    
        $crawler = $client->request('GET', $url);

        $todaytemp = $crawler->filter('.today_area .todaytemp')->text() . "℃|n";

        if($todaytemp == "" || !isset($todaytemp)) {
            return "없는 지역입니다.";
        }
        $cast_txt = $crawler->filter('.today_area .cast_txt')->text() . "|n";
        $indicator = $crawler->filter('.today_area .indicator > dt')->text() . " - " . $crawler->filter('.today_area .indicator > dd')->text();

        // $crawler->filter('.today_area .todaytemp')->each(function ($node) {
        //     echo $node->text()."|n";
        // });
     
        echo $todaytemp . $cast_txt . $indicator;
        
    }
    
}
