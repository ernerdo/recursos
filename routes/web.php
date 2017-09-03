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

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    //catalogo
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/catempleado', 'AdminController@index');
Route::post('crear_empleado', 'AdminController@crear_empleado');
Route::get('/list', 'AdminController@listado');
});