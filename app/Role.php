<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
//    public function client()
//    {
//        return $this->belongsTo('App\Client');
//    }

    public function client()
    {
        return $this->hasMany('App\Client');
    }
}
