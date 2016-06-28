<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shoe extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }
    
    public function size(){
        return $this->belongsTo('App\Size');
    }
    
    public function color(){
        return $this->belongsTo('App\Color');
    }
    
}
