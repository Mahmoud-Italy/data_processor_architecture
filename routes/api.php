<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


#Docs
Route::get('docs','AppCtrl@index');

#Products

 #Export
Route::post('products/json/export', 'ProductCtrl@exportJSON');
Route::post('products/xml/export', 'ProductCtrl@exportXML');
Route::get('products/json/export',  function() { return App::abort(404); });
Route::get('products/xml/export', function() { return App::abort(404); });

 #Import
Route::post('products/json/import', 'ProductCtrl@importJSON');
Route::post('products/xml/import', 'ProductCtrl@importXML');
Route::get('products/json/import',  function() { return App::abort(404); });
Route::get('products/xml/import', function() { return App::abort(404); });

