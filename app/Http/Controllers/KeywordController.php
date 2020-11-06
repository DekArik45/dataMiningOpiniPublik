<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class KeywordController extends Controller
{
    public function index()
    {
        $this->data['data'] = DB::table('tb_keyword')
        ->select('id_keyword','keyword',DB::raw('DATE_FORMAT(dari_tgl, "%d %M %Y") as tanggal'))
        ->get();

        return view('keyword',$this->data);
    }

    public function createKeyword(Request $req)
    {
        $date = date("Y-m-d", strtotime($req->dari_tgl));
        DB::table('tb_keyword')->insert([
            'keyword'=>$req->keyword,
            'dari_tgl'=>$date,
            'status'=>1
        ]);

        return redirect('keyword');
    }

    public function updateKeyword($id,Request $req)
    {
        DB::table('tb_keyword')->where('id_keyword',$id)
        ->update([
            'keyword'=>$req->keyword,
            'dari_tgl'=>$req->dari_tgl
        ]);

        return redirect('keyword');
    }

    public function deleteKeyword($id)
    {
        DB::table('tb_keyword')->where('id_keyword',$id)->update([
            'status'=>0
        ]);

        return redirect('keyword');
    }
}
