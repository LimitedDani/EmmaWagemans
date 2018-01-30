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

//Haal lijst op
Route::get('/edit/portfolio', 'PortfolioController@show');
Route::get('/edit/diensten', 'DienstenController@show');
Route::get('/edit/tarieven', 'TarievenController@show');

//Edit pagina's
Route::get('/edit/index', 'IndexController@edit');
Route::get('/edit/portfolio/{portfolio}/show', 'PortfolioController@edit');
Route::get('/edit/diensten/{diensten}/show', 'DienstenController@edit');
Route::get('/edit/tarieven/{tarieven}/show', 'TarievenController@edit');

//Sla bewerkte pagina's op
Route::patch('/edit/index/{index}', 'IndexController@update');
Route::patch('/edit/portfolio/{portfolio}', 'PortfolioController@update');
Route::patch('/edit/diensten/{diensten}', 'DienstenController@update');
Route::patch('/edit/tarieven/{tarieven}', 'TarievenController@update');
