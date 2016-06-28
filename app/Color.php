<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public function shoes(){
        return $this->hasMany('App/Shoe');
    }    
    
}
