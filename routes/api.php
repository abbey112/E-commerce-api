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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('users', 'User\UserController');

//Route::put('users', 'User\UserController@update');
//Route::get('users', 'User\UserController@index');
//Route::post('users', 'User\UserController@store');
//Route::get('users{id}', 'User\UserController@index');

Route::resource('buyers', 'Buyer\BuyerController');