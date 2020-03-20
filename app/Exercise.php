<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $attributes = [
        'seen' => false,
    ];
    function seen(){
        return $this->hasone('App\lastExc','idExc','id' );
    }
    function img(){
        return $this->hasone('App\ImgExc','idExc','id' );
    }
    function categories(){
        return $this->hasMany('App\CategorysExcs','idExc','id' );
    }
}
