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

// Main Pages
Route::get('/', 'PagesController@index');

Route::get('login', 'PagesController@login');

Route::get('customer', 'PagesController@customer');

Route::get('transaksi', 'PagesController@transaksi');

Route::get('laporan', 'PagesController@laporan');

Route::get('pengeluaran', 'PagesController@pengeluaran');

Route::get('pengaturan', 'PagesController@pengaturan');

// Other Pages
Route::post('/tiket/insert', 'TiketController@insert');

Route::get('/tiket/searchById', 'TiketController@searchById');

Route::get('/tiket/searchByDate', 'TiketController@searchByDate');