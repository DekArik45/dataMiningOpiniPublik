<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\SentimentHelper;
use App\Helper\TwitterCrawlHelper;
use DB;

class IndexController extends Controller
{
    public function index()
    {

    }

    public function getDataPost(Request $req)
    {
        TwitterCrawlHelper::instance()->crawl($req->keyword, $req->tgl_dari, $req->tgl_sampai, $req->jumlah_data);
        
        $arrayTwitter = (array) SentimentHelper::instance()->getDataFromCSV("twitter.csv");
        $tf[] = array();
        $count = count($arrayTwitter)-1 ;
        
        for ($i=0; $i < $count; $i++) { 
            $content = $arrayTwitter[$i][7];
            $lowerCase = SentimentHelper::instance()->lowerCase($content);
            $menghilangkanSimbol = SentimentHelper::instance()->menghilangkanSimbol($lowerCase);
            $stopWord = SentimentHelper::instance()->stopWord($menghilangkanSimbol);
            $stemming = SentimentHelper::instance()->stemming($stopWord);
            $tf = SentimentHelper::instance()->tfIdf($stemming);
            $sentiment = SentimentHelper::instance()->sentimentAnalysis($tf);
            
            array_push($arrayTwitter[$i],$sentiment[0]);
            array_push($arrayTwitter[$i],$sentiment[1]);
        }
        $array = array_filter($arrayTwitter);
        return response()->json($array, 200);

        // return response()->json(
        //     array(
        //         'dataTwitter'=> $arrayTwitter,
        //         'dataFacebook'=> $arrayFacebook,
        //         'dataInstagram'=> $arrayInstagram
        //     ), 200);
    }
}
