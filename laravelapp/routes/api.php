<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\FileController;
use App\Http\Controllers\Api\ProfileController;

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

Route::apiResource('/users', UserController::class)
    ->only('index');

Route::post('/token',[AuthController::class, 'login']);

Route::group(['middleware' => 'auth:sanctum'], function(){
    Route::get('/tokenVerification', function () {
        return 'ok';
    });

    Route::apiResource('/profile', ProfileController::class)
        ->only('create');

    Route::post('/file/upload', [FileController::class, 'upload']);
});
