<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StopWordController extends Controller
{
    public function index()
    {
        $this->data['data'] = DB::table('tm_stopword')
        ->get();

        return view('stopword', $this->data);
    }

    public function craete(Request $req)
    {
        DB::table('tm_stopword')
        ->insert([
            'stpwords' => $req->stopword
        ]);

        return redirect('stopword');
    }

    public function update($id, Request $req)
    {
        DB::table('tm_stopword')
        ->where('id', $id)
        ->update([
            'stpwords' => $req->stopwords
        ]);

        return redirect('stopword');
    }

    public function delete(Request $req)
    {
        DB::table('tm_stopword')
        ->where('id', $req->id)
        ->delete();

        return redirect('stopword');
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
