<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth',
    'namespace' => 'App\Http\Controllers\Api\V1'

], function ($router) {

    // AuthController
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

Route::group([

    'middleware' => 'api',
    'prefix' => 'student',
    'namespace' => 'App\Http\Controllers\Api\V1\Student'

], function ($router) {

    // RegistrationPPDB Controller
    Route::post('registration', 'RegistrationPPDBController@update');

});



