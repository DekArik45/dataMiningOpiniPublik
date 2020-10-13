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
        $task = Twitter::getSearch(['q' => '#Bali', 'count' => $jumlahData, 'format' => 'json']);
        $jsonDecoded = json_decode($task,true);
        // print("<pre>".print_r ($jsonDecoded,true)."</pre>");
        // echo ($jsonDecoded['statuses'][0]['user']['screen_name']);
        $csvFileName = 'twitter.csv';
        $columns = array('id_sosmed', 'id_post_sosmed', 'username', 'foto_profile', 'tanggal', 'jam','lokasi ', 'content', 'like', 'dislike', 'share', 'sentiment');
        $file = fopen($csvFileName, 'w');
        fputcsv($file, $columns);
        for ($i = 0; $i < count($jsonDecoded['statuses']); $i++){
            $date = $jsonDecoded['statuses'][$i]['created_at'];
            $newDate= strtotime($date);
            $tanggal = date ("Y-m-d", $newDate);
            $jam = date("H:i:s",$newDate);
            $row['id_sosmed'] = 1;
            $row['id_post_sosmed'] = $jsonDecoded['statuses'][$i]['id'];
            $row['username'] = $jsonDecoded['statuses'][$i]['user']['screen_name'];
            $row['foto_profile'] = $jsonDecoded['statuses'][$i]['user']['screen_name'];
            $row['tanggal'] = $tanggal;
            $row['jam'] = $jam;
            $row['lokasi'] = $jsonDecoded['statuses'][$i]['user']['location'];
            $row['content'] = $jsonDecoded['statuses'][$i]['text'];
            if (array_key_exists('retweeted_status', $jsonDecoded['statuses'][$i])) {
                $row['like'] = $jsonDecoded['statuses'][$i]['retweeted_status']['favorite_count'];
            }else{
                $row['like'] = $jsonDecoded['statuses'][$i]['favorite_count'];
            }
            $row['dislike'] = 0;
            $row['share'] = $jsonDecoded['statuses'][$i]['retweet_count'];
            $row['sentiment'] = 0;
            
            fputcsv($file, array($row['id_sosmed'], $row['id_post_sosmed'], $row['username'], $row['foto_profile'], $row['tanggal'], $row['jam'], $row['lokasi'], $row['content'], $row['like'], $row['dislike'], $row['share'], $row['sentiment']));
        }
        fclose($file);
    }
}
