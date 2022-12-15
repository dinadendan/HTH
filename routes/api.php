<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UsersController;
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



Route::group(['middleware' => ['api'] ],function(){
    Route::get('get-medicines','App\Http\Controllers\MedicinesController@index');
    Route::get('get-tools','App\Http\Controllers\MedicinesToolsController@index');
});


Route::controller(UsersController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

Route::controller(OrderController::class)->group(function () {
    Route::post('order', 'order');

});


Route::controller(MessageController::class)->group(function () {
    Route::post('message', 'message');

});


