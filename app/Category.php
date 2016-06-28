<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function shoes(){
        return $this->hasMany('App/Shoe');
    }    
    
}
