<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('posts', 'PostController@index');

Route::group(['prefix' => 'posts'], function () {
    Route::post('add', 'PostController@create');
    Route::get('edit/{id}', 'PostController@show');
    Route::post('update/{id}', 'PostController@update');
    Route::delete('delete/{id}', 'PostController@destroy');
});