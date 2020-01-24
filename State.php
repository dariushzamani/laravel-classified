<?php

namespace App;
use App\City;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{

    public $timestamps = false;

    public function cities(){
        return $this->hasMany('App\City', 'state_id');
    }
}
