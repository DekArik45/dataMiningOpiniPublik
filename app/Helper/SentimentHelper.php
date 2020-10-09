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

     public function getDataFromCSV($namaFile="null")
     {
         //0=id_post_sosmed,1=username,2=foto_profile,3=tanggal,4=jam,5=lokasi,6=content,7=like,8=dislike,9=share
        $dataArray = array();
        $file = public_path("file/".$namaFile);
        if (file_exists($file)) {
            $f_pointer=fopen($file,"r"); // file pointer
            fgetcsv($f_pointer);
            while(!feof($f_pointer)){
                array_push($dataArray,fgetcsv($f_pointer));
            }
            fclose($f_pointer);
            return $dataArray;
        }
        else{
            return "File Not Found";
        }
     }

     public function lowerCase($string)
     {
        $data = strtolower($string);
        return $data;
     }

     public function menghilangkanSimbol($string)
     {
        $data = preg_replace("/[^a-zA-Z\s,-\/0-9]/", "", $string);
        return $data;
     }

     public function stopWord($string)
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

     public function stemming($string)
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
     
     public function sentimentAnalysis()
     {
         
     }

}