<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SentimentController extends Controller
{
    public function index()
    {
        $this->data['data']=DB::table('tm_sentiment')->get();
        return view('sentiment', $this->data);
    }

    public function craete(Request $req)
    {
        DB::table('tm_sentiment')->insert([
            'kata'=>$req->kata,
            'sentiment'=>$req->sentiment
        ]);

        return redirect("sentiment");
    }

    public function update($id, Request $req)
    {
        DB::table('tm_sentiment')
        ->where('id_sentiment',$id)
        ->update([
            "kata"=>$req->kata,
            "sentiment"=>$req->sentiment
        ]);

        return redirect("sentiment");
    }

    public function delete(Request $req)
    {
        DB::table('tm_sentiment')
        ->where('id_sentiment',$req->id_sentiment)
        ->delete();

        return redirect('sentiment');
    }

    public function uploadSqlDump(Request $req)
    {
        
    }

    public function uploadExcel(Request $req)
    {
        
    }

    public function uploadXML(Request $req)
    {
        
    }
}
