<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/kauppa', 'ProductController@index');
Route::get('/', function () {
    return view('etusivu');
});


Auth::routes();
Route::get('/kori1', 'KoriController@show1');
    Route::get('/kori', 'KoriController@show');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/check', 'TiedotsController@check');
    Route::post('/check', 'TiedotsController@store');
    Route::patch('/check/{id}', 'TiedotsController@update_t');
    Route::get('add/{tuote_id}', 'KoriController@add');
Route::group(['middleware' => ['auth', 'admin']], function() {
    // your routes
Route::get('/create', 'ProductController@create');
Route::post('/create', 'ProductController@store');
Route::get('/editlist', 'ProductController@editlist');
Route::get('/edit/{id}', 'ProductController@edit');
Route::patch('/edit/{id}', 'ProductController@update');
Route::delete('/edit/{id}', 'ProductController@destroy');
});
