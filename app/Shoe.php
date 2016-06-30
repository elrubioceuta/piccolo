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
    
    public function book(){
        return $this->hasMany('App\Book');
    }
    
    public function images(){
                return array(
            'server_path' => public_path().'/uploads/',
            'asset_path' => 'uploads/',
            'image_large' => 'large_'.$this->id.'.jpg',
        );

    }
    
}
