<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    protected $table='tb_tracking';
    protected $primaryKey = 'id_tracking';
    public $timestamps = false;
    protected $guard = [];

    public function post()
    {
        return $this->belongsTo('App\Post','id_post');
    }
}
