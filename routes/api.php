<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('send', 'App\Http\Controllers\Api\ProxyController@get')->name('send.get');
Route::post('send', 'App\Http\Controllers\Api\ProxyController@post')->name('send.post');
Route::put('send', 'App\Http\Controllers\Api\ProxyController@put')->name('send.put');
Route::delete('send', 'App\Http\Controllers\Api\ProxyController@delete')->name('send.delete');
Route::patch('send', 'App\Http\Controllers\Api\ProxyController@patch')->name('send.patch');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
