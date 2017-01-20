<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/data', 'DataController@showUserInfo');
Route::get('/sendMail', 'DataController@sendMail');
Route::get('/updateExcel', 'DataController@updateExcel');
Route::get('/download', 'DataController@downloadItem');
Route::get('/upload', 'DataController@uploadItem');
Route::get('/updateProfile', 'DataController@updateProfile');
Route::get('/login', 'LoginController@login');
Route::get('/setLogin', 'LoginController@setLogin');