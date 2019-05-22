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
Route::get('solidaria/{id}/solidaria', 'FrontendController@show_solidaria')->name('show_solidaria');
Route::get('solidaria/{news}','FrontendController@solidaria_blog')->name('solidaria_blog');
Route::get('contacto','FrontendController@contacto')->name('contacto');
Route::get('pedido','FrontendController@pedido')->name('pedido');
Route::get('presupuesto','FrontendController@presupuesto')->name('presupuesto');
Auth::routes();
/*Route::get('/download/{file}', function($file) {
    return response()->download($file);
})->name('downloadFile');*/


Route::group(['middleware' => 'auth', 'prefix' => 'adm'],function (){
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
        Route::get('{section}/{tipo}', ['uses' => 'Adm\ContentController@index', 'as' => '.index']);
        Route::get('{section}/{tipo}/create', ['uses' => 'Adm\ContentController@create', 'as' => '.create']);
        Route::post('/store', ['uses' => 'Adm\ContentController@store', 'as' => '.store']);
        Route::get('{section}/{contenido}/edit', ['uses' => 'Adm\ContentController@edit', 'as' => '.edit']);
        Route::put('{contenido}/update', ['uses' => 'Adm\ContentController@update', 'as' => '.update']);
        Route::get('/eliminar/lista/{section}/{contenido}', ['uses' => 'Adm\ContentController@delete', 'as' => '.delete']);
    });
    // GALERIAS DE NEWS
    Route::group(['prefix' => 'galeria', 'as' => 'galeria'], function() {
        Route::get('{id}', ['uses' => 'Adm\GaleryController@index', 'as' => '.index']);
        Route::get('crear/galeria/{id}', ['uses' => 'Adm\GaleryController@create', 'as' => '.create']);
        Route::post('/store', ['uses' => 'Adm\GaleryController@store', 'as' => '.store']);
        Route::get('{id}/edit', ['uses' => 'Adm\GaleryController@edit', 'as' => '.edit']);
        Route::put('{contenido}/update', ['uses' => 'Adm\GaleryController@update', 'as' => '.update']);
        Route::get('{id}/destroy', ['uses' => 'Adm\GaleryController@destroy', 'as' => '.destroy']);
    });
    Route::group(['prefix' => 'pedidos', 'as' => 'pedidos'], function() {
        Route::get('pedidos', ['uses' => 'Adm\OrderController@index', 'as' => '.index']);

    });


    Route::resource('categoria','Adm\CategoryController');
    Route::resource('novedad','Adm\NewsController');
    Route::resource('metadatos','Adm\MetadataController');
    Route::get('meta/{id}','Adm\MetadataController@eliminar')->name('metadato.eliminar');
    Route::resource('usuario','Adm\UserController');
    Route::get('usuario/destroy/{id}','Adm\UserController@delete')->name('usuario.delete');

});
//Route::get('/home', 'HomeController@index')->name('home');
/*Route::post('/upload','HomeController@index');*/