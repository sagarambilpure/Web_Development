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
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/public/login','PublicController@login');

Route::get('/public/register','PublicController@register');

Route::post('/users','UserController@save_user');
Route::post('/users/authenticate','UserController@authenticate');
Route::get('/home','HomeController@index');
Route::get('/users','UserController@listUsers');
Route::get('/logout','UserController@logout');
