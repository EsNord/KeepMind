<?php

namespace App\Http\Controllers;

use App\ImgUser;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        $res = ['user'=> auth()->user(),
            'img' => null];
            $res['img'] = $res['user']->img;

        return $res;
    }

}
