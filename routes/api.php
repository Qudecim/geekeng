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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::resource('word', \App\Http\Controllers\WordsController::class);
Route::post('sign_in', [\App\Http\Controllers\UsersController::class, 'signIn']);
Route::post('sign_up', [\App\Http\Controllers\UsersController::class, 'signUp']);
