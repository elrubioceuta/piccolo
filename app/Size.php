<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function shoes(){
        return $this->hasMany('App/Shoe');
    }    
    
}
