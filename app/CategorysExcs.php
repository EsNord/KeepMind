<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategorysExcs extends Model
{
    function category(){
        return $this->hasMany('App\Category','id','idCategory' );
    }
}
