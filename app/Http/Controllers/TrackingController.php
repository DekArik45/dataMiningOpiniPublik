<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function index()
    {
        $this->data['data'] = DB::table('tb_tracking')
        ->join('tb_post', 'tb_post.id_post','tb_tracking.id_post')
        ->where('tb_post.status_tracking','!=',0)
        ->get();

        return view('tracking', $this->data);
    }

    public function createTracking(Request $req)
    {
        DB::table('tb_tracking')->insert([
            'id_post'=>$req->id_post,
            'like'=>$req->like,
            'share'=>$req->share,
            'comment'=>$req->comment,
            'dislike'=>$req->dislike,
            'tanggal'=>$req->tanggal
        ]);

        DB::table('tb_post')->where('id_post',$req->id_post)
        ->update([
            'status_tracking'=>1
        ]);
        
        return redirect('/tracking');

    }

    public function updateTracking(Request $req)
    {
        DB::table('tb_post')->where('id_post',$req->id_post)
        ->update([
            'status_tracking'=>$req->status_tracking
        ]);

        return redirect('/tracking');
    }
}
