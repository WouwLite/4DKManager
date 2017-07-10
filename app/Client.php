<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function meals()
    {
        return $this->hasMany('App\Meal');
    }

    public function roles()
    {
        return $this->belongsTo('App\Role');
    }
}
