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

Route::get('/','FrontendController@home')->name('home');
Route::get('empresa','FrontendController@empresa')->name('empresa');
Route::get('servicios','FrontendController@servicios')->name('servicios');
Route::get('flota','FrontendController@flota')->name('flota');
Route::get('clientes','FrontendController@clientes')->name('clientes');
Route::get('politica-de-calidad','FrontendController@calidad')->name('calidad');
Route::get('solidaria','FrontendController@solidaria')->name('solidaria');
Route::get('contacto','FrontendController@contacto')->name('contacto');

Auth::routes();

Route::prefix('adm')->group(function (){
    Route::view('/',  'adm.layouts.app');
});
//Route::get('/home', 'HomeController@index')->name('home');
