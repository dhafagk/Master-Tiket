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
    return view('welcome');
});

Route::resource('customer','CustomerController');
Route::get('customer/delete/{id}', 'CustomerController@destroy');

Route::resource('transtype','TranstypeController');
Route::get('transtype/delete/{id}', 'TranstypeController@destroy');

Route::resource('trans','TransController');
Route::get('trans/delete/{id}', 'TransController@destroy');

Route::resource('rute','RuteController');
Route::get('rute/delete/{id}', 'RuteController@destroy');

Route::resource('reservation','ReservationController');
Route::get('reservation/delete/{id}', 'ReservationController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');
