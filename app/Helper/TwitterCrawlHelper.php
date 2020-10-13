<?php
namespace App\Helper;
use DB;
use Illuminate\Http\Request;

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
}