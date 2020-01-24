<?php

namespace App;
use App\State;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    
    public $timestamps = false;

    public function state(){ 
        return $this->belongsTo('App\State', 'state_id');
    }
}
