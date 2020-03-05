<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/Register', 'Auth\RegisterController@Register');
Route::post('/user/nameExist', 'UserController@nameExist');
Route::post('/user/emailExist', 'UserController@emailExist');
Route::post('/Login','Auth\LoginController@login');
Route::post('/Profile','ProfileController@profile')->middleware('auth:api');
Route::post('/Dashboard','DashboardController@review')->middleware('auth:api');