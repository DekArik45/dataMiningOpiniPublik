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
        // TwitterCrawlHelper::instance()->crawl($req->keyword, $req->tgl_dari, $req->tgl_sampai, $req->jumlah_data);
        
        // $arrayTwitter = (array) SentimentHelper::instance()->getDataFromCSV("twitter.csv");
        $tf[] = array();
        // $count = count($arrayTwitter)-1 ;
        // $keyword = '%'.$req->keyword.'%';
        $newDateDari = date("Y-m-d", strtotime($req->tgl_dari));
        $newDateSampai = date("Y-m-d", strtotime($req->tgl_dari));
        $dataPost = DB::table('tb_post')
        ->where('content','like','%'."$req->keyword".'%')
        ->where('tanggal','>=',"$newDateDari")
        ->where('tanggal','<=',"$newDateSampai")
        ->limit($req->jumlah_data)
        ->get();

        foreach ($dataPost as $value) {
            $content = $value->content;
            $lowerCase = SentimentHelper::instance()->lowerCase($content);
            $menghilangkanSimbol = SentimentHelper::instance()->menghilangkanSimbol($lowerCase);
            $stopWord = SentimentHelper::instance()->stopWord($menghilangkanSimbol);
            $stemming = SentimentHelper::instance()->stemming($stopWord);
            $tf = SentimentHelper::instance()->tfIdf($stemming);
            $sentiment = SentimentHelper::instance()->sentimentAnalysis($tf);
            
            DB::table('tb_post')->where('id_post',$value->id_post)
            ->update([
                'sentiment'=>$sentiment[0],
                'nilai_sentiment'=>$sentiment[1]
            ]);

            // array_push($arrayTwitter[$i],$sentiment[0]);
            // array_push($arrayTwitter[$i],$sentiment[1]);
        }

        $data = DB::table('tb_post')
        ->where('content','like','%'."$req->keyword".'%')
        ->where('tanggal','>=',"$newDateDari")
        ->where('tanggal','<=',"$newDateSampai")
        ->limit($req->jumlah_data)
        ->get();

        return $data;

        // for ($i=0; $i < $count; $i++) { 
        //     $content = $arrayTwitter[$i][7];
        //     $lowerCase = SentimentHelper::instance()->lowerCase($content);
        //     $menghilangkanSimbol = SentimentHelper::instance()->menghilangkanSimbol($lowerCase);
        //     $stopWord = SentimentHelper::instance()->stopWord($menghilangkanSimbol);
        //     $stemming = SentimentHelper::instance()->stemming($stopWord);
        //     $tf = SentimentHelper::instance()->tfIdf($stemming);
        //     $sentiment = SentimentHelper::instance()->sentimentAnalysis($tf);
            
        //     array_push($arrayTwitter[$i],$sentiment[0]);
        //     array_push($arrayTwitter[$i],$sentiment[1]);
        // }
        // $array = array_filter($arrayTwitter);
        // return response()->json($array, 200);

        // return response()->json(
        //     array(
        //         'dataTwitter'=> $arrayTwitter,
        //         'dataFacebook'=> $arrayFacebook,
        //         'dataInstagram'=> $arrayInstagram
        //     ), 200);
    }
}
