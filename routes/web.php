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

//Diensten
Route::get('/diensten', function (){
    return view('diensten.index');
});

//Portfolio
Route::get('/portfolio', function (){
    return view('portfolio.index');
});

//Tarieven
Route::get('/tarieven', function (){
    return view('tarieven.index');
});

//Contact form 
Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');


//CMS Routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//CMS Berichten, delete en show
Route::get('/berichten', 'ContactController@show');
Route::delete('/berichten/{contact}', 'ContactController@delete');

