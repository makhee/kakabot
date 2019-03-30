<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class Weather extends Controller
{

    public function getWeather($city)
    {
        if($city == "") {
            $city = "서울";
        }
        $url = 'https://search.naver.com/search.naver?query=날씨+' . $city;

        $client = new Client();
    
        $crawler = $client->request('GET', $url);

        if($crawler->filter('.today_area .todaytemp')->count() > 0){
            $todaytemp = $crawler->filter('.today_area .todaytemp')->text() . "℃|n";
            $cast_txt = $crawler->filter('.today_area .cast_txt')->text() . "|n";
            $indicator = $crawler->filter('.today_area .indicator > dt')->text() . " - " . $crawler->filter('.today_area .indicator > dd')->text();
            
            echo $todaytemp . $cast_txt . $indicator;
        } else {
            echo '날씨 정보를 제공할수 없는 지역입니다.';
        }
        // $crawler->filter('.today_area .todaytemp')->each(function ($node) {
        //     echo $node->text()."|n";
        // });        
    }
}