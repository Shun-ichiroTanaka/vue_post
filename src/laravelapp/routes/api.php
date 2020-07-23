<?php


Route::middleware('auth:api')->group(function () {

    Route::get('auth-user', 'AuthUserController@show');


    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/posts', 'PostController@index');
    Route::post('/posts', 'PostController@store');
});
