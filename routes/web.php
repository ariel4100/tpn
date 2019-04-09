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
/*
Route::get('/', function () {
    return view('page.home');
});*/

Route::get('/','FrontendController@home');
Route::get('empresa','FrontendController@empresa');
Route::get('servicios','FrontendController@servicios');
Route::get('flota','FrontendController@flota');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
