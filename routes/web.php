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

//Index
Route::get('/', function () {
    return view('layouts.index');
});

//CMS Routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//get contacts niet 100% sure of het goed was.
Route::get('/berichten', 'ContactController@show');

//Contact form Routes
Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');
