<?php
namespace App\Helper;
use Sastrawi\Stemmer\StemmerFactory;
use DB;
use Illuminate\Http\Request;
use App\KataDasar;

class SentimentHelper
{
    public static function instance()
     {
         return new SentimentHelper();
     }

     public function LowerCase($string)
     {
        $data = strtolower($string);
        return $data;
     }

     public function MenghilangkanSimbol($string)
     {
        $data = preg_replace("/[^a-zA-Z\s,-\/0-9]/", "", $string);
        return $data;
     }

     public function StopWord($string)
     {
        $data = explode(" ", $string);
        
        //stopword
        $stopword = DB::table('tm_stopword')->get();
        foreach ($stopword as $value) {
            for ($i=0; $i < count($data); $i++) { 
                if ($data[$i] == $value->stpwords) {
                    unset($data[$i]);
                    $data = array_values($data);
                }
            }
        }

        $data = implode(" ",$data);
        return $data;
     }

     public function Stemming($string)
     {
        $data = explode(" ", $string);

        $stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
        $stemmer = $stemmerFactory->createStemmer();

        for ($i=0; $i < count($data); $i++) { 
            $data[$i] = $stemmer->stem($data[$i]);
            
        }
        $data = implode(" ",$data);
        return $data;
     }
     
}