<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Tracking;
use App\Post;
class TrackingController extends Controller
{
    public function index()
    {
        
        // $this->data['data'] = Post::where('status_tracking','!=',0)
        // ->get();

        return view('tracking');
    }

    public function getPostTracking(Request $req)
    {

        $checkData = Tracking::join('tb_post','tb_post.id_post','tb_tracking.id_post');
        if (isset($req->keyword)) {
            $checkData->where(function ($query) {
                $query->where('tb_post.content', 'like', '%'.$req->keyword.'%' )
                ->orWhere('tb_post.lokasi','like','%'.$req->keyword.'%')
                ->orWhere('tb_post.username','like','%'.$req->keyword.'%');
            });
        }
        $checkData->groupBy('tb_post.id_post');

        $data = Post::select('*');
        if (!$checkData->get()->isEmpty()) {
            // return $checkData->get();
            foreach ($checkData->get() as $value) {
                $data->where(function ($query) use ($value) {
                    $query->orWhere('id_post', $value->id_post);
                });
            }
        }
        
        if (isset($req->keyword)) {
            $data->where(function ($query) {
                $query->orWhere('content', 'like', '%'.$req->keyword.'%' )
                ->orWhere('lokasi','like','%'.$req->keyword.'%')
                ->orWhere('username','like','%'.$req->keyword.'%');
            });
        }
        return $data->get();

        // return view('tracking', $this->data);
    }

    public function getTracking(Request $req)
    {
        $data = Tracking::where('id_post',$req->id_post)->get();
        return $data;
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

    public function updateTrackingFromIndex(Request $req)
    {
        // return $req;
        DB::table('tb_post')
        ->where('id_post',$req->id_post)
        ->update([
            'status_tracking'=>$req->status_tracking
        ]);

        return response()->json(
                array(
                    'status'=> true,
                    'message'=> "Berhasil"
                ), 200);

        // return redirect('/tracking');
    }
}
