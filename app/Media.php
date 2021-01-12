<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table='tb_media';
    protected $primaryKey = 'id_media';
    public $timestamps = false;
    protected $guard = [];

    public function post()
    {
        return $this->belongsTo('App\Post','id_post');
    }
}
