<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function meal()
    {
        return $this->hasMany('App\Meal');
    }
}
