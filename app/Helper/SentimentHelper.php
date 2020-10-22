<?php
namespace App\Helper;

use DB;
use Illuminate\Http\Request;
use Sastrawi\Stemmer\StemmerFactory;
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
        $output = implode(" ",$data);
        return $output;
     }
     
     public function tfIdf($string)
     {

        // $array = $this->getDataFromCSV("iris.csv");
        // for ($i=0; $i < count($array); $i++) { 
        //     $content = $array[$i][4];
        //     $lowerCase = $this->lowerCase($content);
        //     $menghilangkanSimbol = $this->menghilangkanSimbol($lowerCase);
        //     $stopWord = $this->stopWord($menghilangkanSimbol);
        //     $stemming = $this->lowerCase($stopWord);
            $words = explode(" ", $string);
            //tf
            $tf  = array_count_values($words);
            return $tf;
            // foreach ($tf as $word => $value) {
            //     echo $word.":".$value."<br>";
            // }
        // }

     }

     public function Bigram($word)
    {
        
        $ngrams = array();
        $len = mb_strlen($word);
        for($i=0;$i+1<$len;$i++){
            $ngram = mb_substr($word, $i, 2);
            $ngrams[$i]=$ngram;       
        }
        return $ngrams;
    }

    public function irisanCosine($candidate, $target)
    {
        
        $irisanCandidate = array();
        $nilaiIrisanCandidate = array();
        $irisanTarget = array();
        $nilaiIrisanTarget = array();

        $irisanTarget = (array_values(array_intersect($target,$candidate)));
        $irisanCandidate = (array_values(array_intersect($candidate,$target)));
        
        sort($irisanTarget);
        sort($irisanCandidate);

        $nilaiCandidate = array_values(array_count_values($irisanCandidate));
        $nilaiKataDasar = array_values(array_count_values($irisanTarget));

        $squares = array_map(function($x, $y) {
			return $x * $y;
		}, $nilaiCandidate,$nilaiKataDasar);
		$hasilSquares = array_reduce($squares, function($a, $b) {
			return $a + $b;
        });

        return $hasilSquares;
    }

    public function pembagiCosine($candidate, $kataDasar)
    {
        $nilaiCandidate = array_values(array_count_values($candidate));
        $nilaiKataDasar = array_values(array_count_values($kataDasar));

        $squaresCandidate = array_map(function($x) {
			return pow($x, 2);
		}, $nilaiCandidate);
		$hasilSquaresCandidate = sqrt(array_reduce($squaresCandidate, function($a, $b) {
			return $a + $b;
        }));
        
        $squaresKataDasar = array_map(function($x) {
			return pow($x, 2);
        }, $nilaiKataDasar);
        
		$hasilsquaresKataDasar = sqrt(array_reduce($squaresKataDasar, function($a, $b) {
			return $a + $b;
        }));
        
        $final = $hasilSquaresCandidate * $hasilsquaresKataDasar;
        return $final;

    }

    public function cosineSimilarity($candidate, $katadasar)
    {
        $candidate = Self::Bigram($candidate);
        $target = Self::Bigram($katadasar);

        return self::irisanCosine($candidate, $target) / self::pembagiCosine($candidate, $target);
    }

     public function sentimentAnalysis($tf)
     {
        //  get dataset positive and negative from db
        $max = 0;
        $i=0;
        $kataSentiment = array();
        $nilaiSentiment = array();
        $totalKata = 0;

        $sentiment = DB::table('tm_sentiment')->get();
        foreach ($tf as $word => $value) {
            if (!empty($word)) {
                if (strlen($word) > 1) {
                    foreach ($sentiment as $data) {
                        $distance = Self::cosineSimilarity($word,$data->kata);
                        if ($distance > 0.9) {
                            if ($max < $distance) {
                                $max = $distance;
                                $kataSentiment[$i] = $word;
                                $nilaiSentiment[$i] = $data->sentiment;
                                $i++;
                            }
                        }
                    }
                    $totalKata += $value;
                }
            }
        }

        
        if ($kataSentiment != null && $nilaiSentiment != null) {
            // menjumlahkan serta mengelompokan kata negatif dan positif
            $jumlahSentiment = array_count_values($nilaiSentiment);
            $positif = 0;
            $negatif = 0;
            foreach ($jumlahSentiment as $sentiment => $value) {
                
                if ($sentiment == "1") {
                    $positif = $value;
                }
                elseif ($sentiment == "-1") {
                    $negatif = $value;
                }
            }

            if ($positif > $negatif) {
                $nilaiSentimentPost = $positif / $totalKata;
                $sentimentPost = "Positif";
            }
            elseif ($negatif > $positif) {
                $nilaiSentimentPost = ($negatif / $totalKata) * -1;
                $sentimentPost = "Negatif";
            }
            else{
                $nilaiSentimentPost = 0;
                $sentimentPost = "Netral";
            }

        }
        else{
            $nilaiSentimentPost = 0;
            $sentimentPost = "Netral";
        }
        $dataAkhir = array($sentimentPost, $nilaiSentimentPost);
        return $dataAkhir;
     }

}