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
Route::get('/login', function () {
    return view('login');
});
Route::get('/currencyconvert', function () {
    return view('currency');
});
Route::get('/addcurrency', function () {
    return view('addcurrency');
});
Route::get('/listcurrency', function () {
    return view('showcurrency');
});

Auth::routes();


//Route::get('/',  'LoginController@index');
//Route::get('/home', 'HomeController@index');
