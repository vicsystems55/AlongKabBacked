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

Route::post('/fund_wallet', 'UserWalletController@fund_wallet');

Route::post('/user_wallet', 'UserWalletController@user_wallet');

Route::post('login', 'Api\AuthController@login');

Route::post('register', 'Api\AuthController@register');
