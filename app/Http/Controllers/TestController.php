<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\SentimentHelper;
use DB;
class TestController extends Controller
{
    public function index()
    {
        $array = SentimentHelper::instance()->getDataFromCSV("iris.csv");
        $tf[] = array();

        for ($i=0; $i < count($array); $i++) { 
            $content = $array[$i][4];
            $lowerCase = SentimentHelper::instance()->lowerCase($content);
            $menghilangkanSimbol = SentimentHelper::instance()->menghilangkanSimbol($lowerCase);
            $stopWord = SentimentHelper::instance()->stopWord($menghilangkanSimbol);
            $stemming = SentimentHelper::instance()->stemming($stopWord);
            $tf = SentimentHelper::instance()->tfIdf($stemming);
            $sentiment = SentimentHelper::instance()->sentimentAnalysis($tf);
            array_push($array[$i],$sentiment[0]);
            array_push($array[$i],$sentiment[1]);
        }
        return $array;
        return view("test");
    }
}
