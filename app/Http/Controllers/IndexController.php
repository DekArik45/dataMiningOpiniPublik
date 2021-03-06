<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\SentimentHelper;
use App\Helper\TwitterCrawlHelper;
use DB;
use Image;
use App\Post;
use App\Media;
use Illuminate\Support\Str;
use Response;

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

            $dataJumlah = DB::table('tb_media')->where('id_post',$value->id_post)->count();
            $dataSentimentMedia = 0;
            sleep(0.5);
            if ($dataJumlah > 0) {
                $tf1[] = array();
                $data = DB::table('tb_media')->where('id_post',$value->id_post)->get();
                foreach ($data as $dataMedia) {
                    $lowerCase1 = SentimentHelper::instance()->lowerCase($content);
                    $menghilangkanSimbol1 = SentimentHelper::instance()->menghilangkanSimbol($lowerCase1);
                    $stopWord1 = SentimentHelper::instance()->stopWord($menghilangkanSimbol1);
                    $stemming1 = SentimentHelper::instance()->stemming($stopWord1);
                    $tf1 = SentimentHelper::instance()->tfIdf($stemming1);
                    $sentiment1 = SentimentHelper::instance()->sentimentAnalysis($tf1);
                    $dataSentimentMedia += $sentiment1[1];

                    sleep(0.5);
                }
                $dataSentimentMedia = $dataSentimentMedia / $dataJumlah;
                if ($dataSentimentMedia != 0) {
                    $sentiment[1] = ($dataSentimentMedia + $sentiment[1]) / 2;
                }

                if ($sentiment[1] > 0) {
                    $sentiment[0] = "Positif";
                }
                elseif ($sentiment[1] < 0) {
                    $sentiment[0] = "Negatif";
                }
                else if ($sentiment[1] == 0) {
                    $sentiment[0] = "Netral";
                }
            }

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
        $perpage = 10;
        $page = $req->page * 10;
        //twitter
        $dataTwitter = Post::where('id_sosmed','1');
        if ($req->keyword != null && $req->keyword != "") {
            $keywordData = "%".$req->keyword."%";

            $dataTwitter->where(function ($query)  use ($keywordData)  {
                $query->where('username','like',$keywordData); 
                $query->orWhere('content','like',$keywordData);
            });
        }
        
        if ($req->tgl_dari != null && $req->tgl_dari != "") {
            $newDateDari = date("Y-m-d", strtotime($req->tgl_dari));
            $dataTwitter->where('tanggal','>=',"$newDateDari");
        }
        if ($req->tgl_sampai != null && $req->tgl_sampai != "") {
            $newDateSampai = date("Y-m-d", strtotime($req->tgl_sampai));
            $dataTwitter->where('tanggal','<=',"$newDateSampai");
        }
        
        if ($req->jumlah_data != "" && $req->jumlah_data != null) {
            if ($req->jumlah_data < $perpage) {
                $dataTwitter->limit($req->jumlah_data);
            }
        }

        $dataTwitter->skip($page)->take($perpage);

        $dataFacebook = Post::where('id_sosmed','2');
        if ($req->keyword != null && $req->keyword != "") {
            $keywordData = "%".$req->keyword."%";
            
            $dataFacebook->where(function ($query)  use ($keywordData)  {
                $query->where('username','like',$keywordData); 
                $query->orWhere('content','like',$keywordData);
            });
        }
        if ($req->tgl_dari != null && $req->tgl_dari != "") {
            $newDateDari = date("Y-m-d", strtotime($req->tgl_dari));
            $dataFacebook->where('tanggal','>=',"$newDateDari");
        }
        if ($req->tgl_sampai != null && $req->tgl_sampai != "") {
            $newDateSampai = date("Y-m-d", strtotime($req->tgl_sampai));
            $dataFacebook->where('tanggal','<=',"$newDateSampai");
        }
        
        if ($req->jumlah_data != "" && $req->jumlah_data != null) {
            if ($req->jumlah_data < $perpage) {
                $dataFacebook->limit($req->jumlah_data);
            }
        }

        $dataFacebook->skip($page)->take($perpage);

            //ig
        $dataInstagram = Post::where('id_sosmed','3');
        if ($req->keyword != null && $req->keyword != "") {
            $keywordData = "%".$req->keyword."%";
            
            $dataInstagram->where(function ($query)  use ($keywordData)  {
                $query->where('username','like',$keywordData); 
                $query->orWhere('content','like',$keywordData);
            });
        }
        if ($req->tgl_dari != null && $req->tgl_dari != "") {
            $newDateDari = date("Y-m-d", strtotime($req->tgl_dari));
            $dataInstagram->where('tanggal','>=',"$newDateDari");
        }
        if ($req->tgl_sampai != null && $req->tgl_sampai != "") {
            $newDateSampai = date("Y-m-d", strtotime($req->tgl_sampai));
            $dataInstagram->where('tanggal','<=',"$newDateSampai");
        }
        
        if ($req->jumlah_data != "" && $req->jumlah_data != null) {
            if ($req->jumlah_data < $perpage) {
                $dataInstagram->limit($req->jumlah_data);
            }
        }

        $dataInstagram->skip($page)->take($perpage);

        return response()->json(
            array(
                'dataTwitter'=> $dataTwitter->get(),
                'dataFacebook'=> $dataFacebook->get(),
                'dataInstagram'=> $dataInstagram->get(),
                'jumlahDataInstagram'=> $dataInstagram->count(),
                'jumlahDataFacebook'=> $dataFacebook->count(),
                'jumlahDataTwitter'=> $dataTwitter->count()
            ), 200);
    }

    public function getMediaPost(Request $req)
    {
        $data = DB::table('tb_media')->where('id_post',$req->id_post)->get();
        return $data;
    }

    public function getTotalSentiment(Request $req)
    {
        $dataTwitter = Post::where('id_sosmed','1');
        if ($req->keyword != null && $req->keyword != "") {
            $keywordData = "%".$req->keyword."%";

            $dataTwitter->where(function ($query)  use ($keywordData)  {
                $query->where('username','like',$keywordData); 
                $query->orWhere('content','like',$keywordData);
            });
        }
        
        if ($req->tgl_dari != null && $req->tgl_dari != "") {
            $newDateDari = date("Y-m-d", strtotime($req->tgl_dari));
            $dataTwitter->where('tanggal','>=',"$newDateDari");
        }
        if ($req->tgl_sampai != null && $req->tgl_sampai != "") {
            $newDateSampai = date("Y-m-d", strtotime($req->tgl_sampai));
            $dataTwitter->where('tanggal','<=',"$newDateSampai");
        }
        
        if ($req->jumlah_data != "" && $req->jumlah_data != null) {
            $dataTwitter->limit($req->jumlah_data);
        }
        

        $dataFacebook = Post::where('id_sosmed','2');
        if ($req->keyword != null && $req->keyword != "") {
            $keywordData = "%".$req->keyword."%";
            
            $dataFacebook->where(function ($query)  use ($keywordData)  {
                $query->where('username','like',$keywordData); 
                $query->orWhere('content','like',$keywordData);
            });
        }
        if ($req->tgl_dari != null && $req->tgl_dari != "") {
            $newDateDari = date("Y-m-d", strtotime($req->tgl_dari));
            $dataFacebook->where('tanggal','>=',"$newDateDari");
        }
        if ($req->tgl_sampai != null && $req->tgl_sampai != "") {
            $newDateSampai = date("Y-m-d", strtotime($req->tgl_sampai));
            $dataFacebook->where('tanggal','<=',"$newDateSampai");
        }
        
        if ($req->jumlah_data != "" && $req->jumlah_data != null) {
            $dataFacebook->limit($req->jumlah_data);
        }

        $dataInstagram = Post::where('id_sosmed','3');
        if ($req->keyword != null && $req->keyword != "") {
            $keywordData = "%".$req->keyword."%";
            
            $dataInstagram->where(function ($query)  use ($keywordData)  {
                $query->where('username','like',$keywordData); 
                $query->orWhere('content','like',$keywordData);
            });
        }
        if ($req->tgl_dari != null && $req->tgl_dari != "") {
            $newDateDari = date("Y-m-d", strtotime($req->tgl_dari));
            $dataInstagram->where('tanggal','>=',"$newDateDari");
        }
        if ($req->tgl_sampai != null && $req->tgl_sampai != "") {
            $newDateSampai = date("Y-m-d", strtotime($req->tgl_sampai));
            $dataInstagram->where('tanggal','<=',"$newDateSampai");
        }
        
        if ($req->jumlah_data != "" && $req->jumlah_data != null) {
            $dataInstagram->limit($req->jumlah_data);
        }

        return response()->json(
            array(
                'dataTwitter'=> $dataTwitter->get(),
                'dataFacebook'=> $dataFacebook->get(),
                'dataInstagram'=> $dataInstagram->get()
            ), 200);

    }
}
