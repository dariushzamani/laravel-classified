<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    public function user(){ 
        return $this->belongsTo('App\User', 'user_id');
    }

    public function state(){ 
        return $this->belongsTo('App\State', 'state_id');
    }

    public function city(){ 
        return $this->belongsTo('App\City', 'city_id');
    }

    public function category(){ 
        return $this->belongsTo('App\Category', 'category_id');
    }

}
