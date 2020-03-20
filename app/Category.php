<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function img(){
        return $this->hasone('App\ImgCategory','idCategory','id' );
    }
}
