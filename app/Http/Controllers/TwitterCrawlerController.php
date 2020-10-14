<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\TwitterCrawlHelper;
use Twitter;

class TwitterCrawlerController extends Controller
{
    public function crawl()
    {
        $jumlahData=3600;
        $task = Twitter::getSearch(['q' => 'Pemerintah Bali', 'count' => $jumlahData, 'format' => 'array', 'tweet_mode'=>'extended']);
        // print("<pre>".print_r ($task,true)."</pre>");
        // echo ($task[]);
        $csvFileName = public_path("file/twitter.csv");
        $columns = array('id_sosmed', 'id_post_sosmed', 'username', 'foto_profile', 'tanggal', 'jam','lokasi ', 'content', 'like', 'dislike', 'share', 'sentiment');
        $file = fopen($csvFileName, 'w');
        
        fputcsv($file, $columns);
        foreach ($task['statuses'] as $data){
            $date = $data['created_at'];
            $newDate= strtotime($date);
            $tanggal = date ("Y-m-d", $newDate);
            $jam = date("H:i:s",$newDate);
            $row['id_sosmed'] = 1;
            $row['id_post_sosmed'] = $data['id'];
            $row['username'] = $data['user']['screen_name'];
            $row['foto_profile'] = $data['user']['screen_name'];
            $row['tanggal'] = $tanggal;
            $row['jam'] = $jam;
            $row['lokasi'] = $data['user']['location'];
            if (array_key_exists('retweeted_status', $data)) {
                $row['like'] = $data['retweeted_status']['favorite_count'];
                $row['content'] = $data['retweeted_status']['full_text'];
            }else{
                $row['like'] = $data['favorite_count'];
                $row['content'] = $data['full_text'];
            }
            $row['dislike'] = 0;
            $row['share'] = $data['retweet_count'];
            $row['sentiment'] = 0;
            
            fputcsv($file, array($row['id_sosmed'], $row['id_post_sosmed'], $row['username'], $row['foto_profile'], $row['tanggal'], $row['jam'], $row['lokasi'], $row['content'], $row['like'], $row['dislike'], $row['share'], $row['sentiment']));
        }
        fclose($file);
    }
}
