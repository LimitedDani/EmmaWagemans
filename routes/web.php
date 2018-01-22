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
Route::get('/', 'IndexController@create');

//Diensten
Route::get('/diensten', 'DienstenController@create');

//Portfolio
Route::get('/portfolio', 'PortfolioController@create');

//Tarieven
Route::get('/tarieven', 'TarievenController@create');

//Contact form 
Route::get('/contact', 'ContactController@create');
Route::post('/contact', 'ContactController@store');


//CMS Routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//CMS Berichten, delete en show
Route::get('/berichten', 'ContactController@show');
Route::delete('/berichten/{contact}', 'ContactController@delete');

