<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ex_Category extends Model
{
    function category(){
        return $this->hasMany('App\Category','idCategory','id' );
    }
}
