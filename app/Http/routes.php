<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){
    Route::resource('cuentas','CuentasController');
    Route::get('cuentas/{id}/destroy', [
        'uses'  =>  'CuentasController@destroy',
        'as'    =>  'admin.cuentas.destroy'
    ]);

    Route::resource('products','ProductosController');
    Route::get('products/{id}/destroy', [
        'uses'  =>  'ProductosController@destroy',
        'as'    =>  'admin.products.destroy'
    ]);
    
    Route::resource('ofertas', 'OfertaController');
});