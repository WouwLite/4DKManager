<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function users() {
        return $this->belongsTo('App\User');
    }

    public function meals() {
        return $this->hasMany('App\Meal');
    }

    public function roles() {
        return $this->belongsTo('App\Role');
    }

    public function countries() {
        return $this->belongsTo('App\Country');
    }
}
