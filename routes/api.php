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

Route::prefix('/patient')->group(function () {
    Route::post('/register', 'API\PasienAuthController@register');
    Route::post('/login', 'API\PasienAuthController@login');
    Route::post('/logout', 'API\PasienAuthController@logout');
});