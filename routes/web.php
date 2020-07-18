<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'MesaggesContrller@index')->name('home');
Route::get('/create/{id?}/{subject?}', 'MesaggesContrller@create')->name('create');
Route::post('/send', 'MesaggesContrller@send')->name('send');
Route::get('/sent', 'MesaggesContrller@sent')->name('sent-messages');
Route::get('/read{id}', 'MesaggesContrller@read')->name('read');
Route::get('/delete/{id}', 'MesaggesContrller@delete')->name('delete');
Route::get('/deleted', 'MesaggesContrller@deleted')->name('deleted-messages');
Route::get('/return/{id}', 'MesaggesContrller@return')->name('return');
