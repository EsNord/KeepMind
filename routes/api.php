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

Route::post('/AdminCp', 'MangerAdmin@AdminCp');
Route::post('/AddCategory', 'MangerAdmin@AddCategory');
Route::post('/CategoryExist', 'MangerAdmin@CategoryExist');
Route::post('/Categories', 'MangerAdmin@GetAllCategories');
Route::post('/DeleteCategory', 'MangerAdmin@DeleteCategory');
Route::post('/AddExc', 'MangerAdmin@AddExc');
Route::post('/DeleteExc', 'MangerAdmin@DeleteExc');
Route::post('/getAllExcs', 'MangerAdmin@getAllExcs');

Route::post('/getAllUsers', 'MangerAdmin@getAllUsers');
