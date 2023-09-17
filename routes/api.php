<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

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

    'middleware' => ['api', 'isLoginWithApi'],
    'prefix' => 'student',
    'namespace' => 'App\Http\Controllers\Api\V1\Student'

], function ($router) {

    // RegistrationPPDB Controller
    Route::get('registration', 'RegistrationPPDBController@index');
    Route::put('registration', 'RegistrationPPDBController@update');

});


Route::group([

    'middleware' => ['api', 'isLoginWithApi'],
    'prefix' => 'admin',
    'namespace' => 'App\Http\Controllers\Api\V1\Admin'

], function ($router) {

    // RegistrationPPDB Controller
    Route::get('registration', 'RegistrationPPDBController@index');
    Route::get('registration/{registration}', 'RegistrationPPDBController@show');
    Route::put('registration/{registration}/change_status', 'RegistrationPPDBController@changeStatus');
    Route::post('registration', 'RegistrationPPDBController@store');

});

Route::post('berkas/upload', [UploadController::class, "store"])->middleware('isLoginWithApi');




