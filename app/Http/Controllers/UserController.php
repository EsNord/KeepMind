<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function nameExist(){
        if ( User::where('user_name', request('name'))->count() == 0){
            return 'true';
        }
        return 'false';
    }
    public function emailExist(){
        if ( User::where('email', request('email'))->count() == 0){
            return 'true';
        }
        return 'false';
    }

}
