<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='tb_post';
    protected $primaryKey = 'id_post';
    public $timestamps = false;
    protected $guard = [];

    public function tracking()
    {
        return $this->hasMany('App\Tracking','id_post');
    }
}
