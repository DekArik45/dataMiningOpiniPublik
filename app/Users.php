<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table='tb_user';
    protected $primaryKey = 'id_user';
    public $timestamps = false;
    protected $guard = [];
}
