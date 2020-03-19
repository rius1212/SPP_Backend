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

// Tabel Pegawai
Route::get('tamus', 'TamuController@index');
Route::get('tamus/{id}', 'TamuController@show');
Route::post('tamus', 'TamuController@store');
Route::post('tamus/{id}', 'TamuController@update');
Route::delete('tamus/{id}', 'TamuController@destroy');