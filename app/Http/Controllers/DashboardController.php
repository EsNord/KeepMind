<?php

namespace App\Http\Controllers;

use App\ImgUser;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public  function review(){

        $res = ['user'=> auth()->user(), 'img' => null ];

        $res['img'] = ImgUser::where('idUser', $res['user']->id)->first();

        return $res;
    }
}
