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

Route::get('/', 'AppCtrl@index');
Route::post('exportJSON', 'AppCtrl@exportJSON');
Route::post('exportCSV', 'AppCtrl@exportCSV');
Route::post('importJSON', 'AppCtrl@importJSON');
Route::post('importCSV', 'AppCtrl@importCSV');