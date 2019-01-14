<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/produks', 'ProdukController');
Route::group(['prefix'=>'produks'], function(){
    Route::apiResource('/{produk}/reviews', 'ReviewController');
});
