<?php

use Illuminate\Http\Request;

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

Route::post('/student','Apicontroller@create');

Route::get('/students','Apicontroller@show');

Route::get('/students/{id}','Apicontroller@showbyid');

Route::put('/studentupdate/{id}','Apicontroller@updatebyid');

Route::delete('/studentdelete/{id}','Apicontroller@dalatebyid');