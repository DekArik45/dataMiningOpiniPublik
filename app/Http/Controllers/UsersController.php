<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DB;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['data'] = DB::table('users')
        ->select('id','name','email','is_admin')
        ->get();

        return view('user',$this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        //
        DB::table('users')->insert([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>bcrypt($req->password),
            'is_admin'=>$req->is_admin
        ]);

        return redirect('user')->with('success', 'Data Berhasil Ditambahkan.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function show(Users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit(Users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req)
    {
        DB::table('users')
        ->where('email',$req->email)
        ->update([
            "password"=>bcrypt($req->password) 
        ]);

        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users  $users
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        DB::table('users')
        ->where('id', $id)
        ->delete();

        return redirect('user')->with('success', 'Data Berhasil Dihapus.');
    }
}
