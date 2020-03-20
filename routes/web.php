<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Auth::routes();
Route::get('Profile/edit','ProfileController@edit')->name('edit');
Route::post('Profile/edit','ProfileController@update')->name('edit');

Route::get('/Dashboard', function () {
    return view('Dashboard');
})->name('Dashboard');

Route::get('/Profile', function () {
    return view('Pages.Profile.ShowProfile');
})->name('Profile');

Route::get('Profile/edit', function () {
    return view('Pages.Profile.EditProfile');
})->name('update');

Route::get('/Login/{provider}','Auth\LoginController@redirectToProvider');
Route::get('/Login/{provider}/Callback','Auth\LoginController@handleProviderCallback');

Route::get('/Admin', function () {
    return view('AdminCp.Cp');
})->name('MainCp');
//AdminCp
Route::get('/Admin/Exercise/Add', function () {
    return view('AdminCp.pages.AddEx');
})->name('AddEX');

Route::get('/Admin/Exercise/Category', function () {
    return view('AdminCp.pages.Category');
})->name('Category');

Route::get('/Admin/Exercise/ManageEx', function () {
    return view('AdminCp.pages.ManageEx');
})->name('MangeEx');
Route::get('/Admin/Exercise', function () {
    return view('AdminCp.pages.ShowEx');
})->name('ShowEx');

Route::get('/Admin/ManageUser', function () {
    return view('AdminCp.pages.ManageUser');
})->name('ManageUser');
