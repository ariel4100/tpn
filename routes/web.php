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
Route::get('pedido','FrontendController@pedido')->name('pedido');

Auth::routes();

Route::prefix('adm')->group(function (){
    Route::view('/',  'adm.home.index');

    Route::group(['prefix' => 'slider', 'as' => 'slider'], function() {
        Route::get('{seccion}/create', ['uses' => 'Adm\SliderController@create', 'as' => '.create']);
        Route::post('store', ['uses' => 'Adm\SliderController@store', 'as' => '.store']);
        Route::get('{seccion}/list', ['uses' => 'Adm\SliderController@list', 'as' => '.list']);
        Route::get('edit/{slider}', ['uses' => 'Adm\SliderController@edit', 'as' => '.edit']);
        Route::post('update/{slider}', ['uses' => 'Adm\SliderController@update', 'as' => '.update']);
        Route::get('destroy/{slider}', ['uses' => 'Adm\SliderController@destroy', 'as' => '.destroy']);
    });

    Route::group(['prefix' => 'contenido', 'as' => 'contenido'], function() {
        Route::get('{section}/{tipo}', ['uses' => 'adm\ContentController@index', 'as' => '.index']);
        Route::get('{section}/{tipo}/create', ['uses' => 'adm\ContentController@create', 'as' => '.create']);
        Route::post('/store', ['uses' => 'adm\ContentController@store', 'as' => '.store']);
        Route::get('{section}/{contenido}/edit', ['uses' => 'adm\ContentController@edit', 'as' => '.edit']);
        Route::put('{contenido}/update', ['uses' => 'adm\ContentController@update', 'as' => '.update']);
        Route::delete('{contenido}/destroy', ['uses' => 'adm\ContentController@destroy', 'as' => '.destroy']);


    });
});
//Route::get('/home', 'HomeController@index')->name('home');
Route::post('/upload','HomeController@index');