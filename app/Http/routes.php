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

Route::get('/', [
    'as'    =>  'front.index' ,
    'uses'  =>  'FrontController@index'
]);


Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/', ['as' => 'admin.index' ,function () {
        return view('admin.index');
    }]);

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
    
    Route::resource('users', 'UsersController');
    Route::get('users/{id}/destroy',[
        'uses'  =>  'UsersController@destroy',
        'as'    =>  'admin.users.destroy'
    ]);

    Route::resource('ofertas', 'OfertaController');
    Route::get('ofertas/{id}/destroy',[
        'uses'  =>  'OfertaController@destroy',
        'as'    =>  'admin.ofertas.destroy'
    ]);
});

/*
 * Rutas para el inicio de sesión
 */
Route::get('admin/auth/login', [
    'uses'  =>  'Auth\AuthController@getLogin',
    'as'    =>  'admin.auth.login'
]);

Route::post('admin/auth/login', [
    'uses'  =>  'Auth\AuthController@postLogin',
    'as'    =>  'admin.auth.login'
]);

Route::get('admin/auth/logout', [
    'uses'  =>  'Auth\AuthController@getLogout',
    'as'    =>  'admin.auth.logout'
]);