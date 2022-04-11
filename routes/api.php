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


Route::get('group/', [\App\Http\Controllers\WordGroupsController::class, 'index']);
Route::get('group/{wordGroup}', [\App\Http\Controllers\WordGroupsController::class, 'show']);
Route::post('group/', [\App\Http\Controllers\WordGroupsController::class, 'store']);
Route::delete('group/{wordGroup}', [\App\Http\Controllers\WordGroupsController::class, 'destroy']);

Route::get('word/', [\App\Http\Controllers\WordsController::class, 'index']);
Route::get('word/{Word}', [\App\Http\Controllers\WordsController::class, 'show']);
Route::post('word/', [\App\Http\Controllers\WordsController::class, 'store']);
Route::delete('word/{Word}', [\App\Http\Controllers\WordsController::class, 'destroy']);
