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

        $tf[] = array();
        $content = "Gubernur Koster acuh tak acuh dan tidak baik berdayakan mantan atlet berprestasi jadi pembina: Gubernur Bali Wayan Koster berencana memberdayakan mantan atlet berprestasi menjadi pembina olahraga sebagai bentuk perhatian serius pemerintah setempat kepada mereka";

        $lowerCase = SentimentHelper::instance()->lowerCase($content);
        
        $menghilangkanSimbol = SentimentHelper::instance()->menghilangkanSimbol($lowerCase);
        echo "menghilangkan simbol dan lowercase = ".$menghilangkanSimbol."</br></br>";
        // $stopWord = SentimentHelper::instance()->stopWord($menghilangkanSimbol);
        // echo "stopword = ".$stopWord."</br></br>";
        $stemming = SentimentHelper::instance()->stemming($menghilangkanSimbol);
        echo "stemming = ".$stemming."</br></br>";
        $tf = SentimentHelper::instance()->tfIdf($stemming);
        echo "tf-idf transform = ";print_r($tf);
        $sentiment = SentimentHelper::instance()->sentimentAnalysis($tf);
        echo "</br></br> sentiment = ".$sentiment[0]."</br></br>";
        echo "nilai sentiment = ".$sentiment[1];

    }

    public function serviceSentiment()
    {
        $tf[] = array();
        
        $dataPost = DB::table('tb_post')
        ->where('status_sentiment',0)
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
                'nilai_sentiment'=>$sentiment[1],
                'status_sentiment'=>1
            ]);
        }
        return "selesai update sentiment";
    }

    public function getDataPost(Request $req)
    {
        
        $dataTwitter = DB::table('tb_post')->where('id_sosmed','1');
        if ($req->keyword != null && $req->keyword != "") {
            $keywordData = $req->keyword;
            $dataTwitter->where(function ($query) use ($keywordData)  {
                $query->orWhere('content','like','%'."$keywordData".'%')
                ->orWhere('username','like','%',"$keywordData".'%');
            });
        }
        if ($req->tgl_dari != null && $req->tgl_dari != "") {
            $newDateDari = date("Y-m-d", strtotime($req->tgl_dari));
            $dataTwitter->where('tanggal','>=',"$newDateDari");
        }
        if ($req->tgl_dari != null && $req->tgl_dari != "") {
            $newDateSampai = date("Y-m-d", strtotime($req->tgl_dari));
            $dataTwitter->where('tanggal','<=',"$newDateSampai");
        }
        
        $dataTwitter->limit($req->jumlah_data);

        $dataFacebook = DB::table('tb_post')->where('id_sosmed','2');
        if ($req->keyword != null && $req->keyword != "") {
            $keywordData = $req->keyword;
            $dataFacebook->where(function ($query) use ($keywordData)  {
                $query->orWhere('content','like','%'."$keywordData".'%')
                ->orWhere('username','like','%',"$keywordData".'%');
            });
        }
        if ($req->tgl_dari != null && $req->tgl_dari != "") {
            $newDateDari = date("Y-m-d", strtotime($req->tgl_dari));
            $dataFacebook->where('tanggal','>=',"$newDateDari");
        }
        if ($req->tgl_dari != null && $req->tgl_dari != "") {
            $newDateSampai = date("Y-m-d", strtotime($req->tgl_dari));
            $dataFacebook->where('tanggal','<=',"$newDateSampai");
        }
        
        $dataFacebook->limit($req->jumlah_data);

        $dataInstagram = DB::table('tb_post')->where('id_sosmed','3');
        if ($req->keyword != null && $req->keyword != "") {
            $keywordData = $req->keyword;
            $dataInstagram->where(function ($query) use ($keywordData)  {
                $query->orWhere('content','like','%'."$keywordData".'%')
                ->orWhere('username','like','%',"$keywordData".'%');
            });
        }
        if ($req->tgl_dari != null && $req->tgl_dari != "") {
            $newDateDari = date("Y-m-d", strtotime($req->tgl_dari));
            $dataInstagram->where('tanggal','>=',"$newDateDari");
        }
        if ($req->tgl_dari != null && $req->tgl_dari != "") {
            $newDateSampai = date("Y-m-d", strtotime($req->tgl_dari));
            $dataInstagram->where('tanggal','<=',"$newDateSampai");
        }
        
        $dataInstagram->limit($req->jumlah_data);

        return response()->json(
            array(
                'dataTwitter'=> $dataTwitter->get(),
                'dataFacebook'=> $dataFacebook->get(),
                'dataInstagram'=> $dataInstagram->get()
            ), 200);
    }
}
