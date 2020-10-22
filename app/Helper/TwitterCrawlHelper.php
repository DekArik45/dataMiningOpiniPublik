<?php
namespace App\Helper;
use DB;
use Illuminate\Http\Request;
use Twitter;
use DateTime;
class TwitterCrawlHelper
{
    public static function instance()
     {
         return new TwitterCrawlHelper();
     }

     public function exportCsv($tasks)
    {
        $fileName = 'tasks.csv';
        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('name', 'text');

        $callback = function() use($tasks, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($tasks as $task) {
                $row['name']  = $task->user->screen_name;
                $row['text']    = $task->text;

                fputcsv($file, array($row['name'], $row['text']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function crawl($keyword, $dariTgl, $sampaiTgl, $jumlahData)
    {
        $dariTglNew = new DateTime($dariTgl);
        $sampaiTglNew = new DateTime($sampaiTgl);
        $different = date_diff($dariTglNew,$sampaiTglNew);
        $days = $different->format("%a") +1;

        $csvFileName = public_path("file/twitter.csv");
        $columns = array('id_sosmed', 'id_post_sosmed', 'username', 'foto_profile', 'tanggal', 'jam','lokasi ', 'content', 'like', 'dislike', 'share', 'sentiment');
        $file = fopen($csvFileName, 'w');
        fputcsv($file, $columns);

        for ($i=1; $i <= $days; $i++) { 
            $tgl = date('Y-m-d', strtotime($dariTgl. ' + '.$i.' days'));
            $task = Twitter::getSearch(['q' => $keyword, 'until'=>$tgl, 'count' => $jumlahData, 'format' => 'array', 'tweet_mode'=>'extended']);

            foreach ($task['statuses'] as $data){
                $date = $data['created_at'];
                $newDate= strtotime($date);
                $tanggal = date ("Y-m-d", $newDate);
                $jam = date("H:i:s",$newDate);
                $row['id_sosmed'] = 1;
                $row['id_post_sosmed'] = $data['id'];
                $row['username'] = $data['user']['screen_name'];
                $row['foto_profile'] = $data['user']['profile_image_url_https'];
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
        }

        fclose($file);
    }

}