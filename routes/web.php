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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('a-propos', function () {
    return view('a-propos');
});


//Clients
Route::get('clients', 'ClientController@index');
Route::get('client/create','ClientController@create');
Route::post('clients', 'ClientController@store');
Route::get('client/{client}','ClientController@show');
Route::get('clients/{client}/edit','ClientController@edit');
Route::patch('clients/{client}','ClientController@update');
Route::delete('clients/{client}','ClientController@destroy');