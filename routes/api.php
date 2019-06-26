<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/products', 'ProductController');

Route::group(['prefix' => 'products'], function () {
    Route::apiResource('/{product}/reviews', 'ReviewController');
});


Route::apiResource('/orders', 'OrderController');

Route::group(['prefix' => 'orders'], function () {
    Route::apiResource('/{order}/orderitems', 'OrderItemController');
});