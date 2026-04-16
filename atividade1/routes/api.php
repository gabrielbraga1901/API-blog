<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('status', function (){
    return response()->json(['status' => 'ok']);
});

route::get('posts', [PostController::class, 'index']);
route::post('post', [PostController::class, 'store']);
route::put('post/{post', [PostController::class, 'update']);
route::delete('post/{post', [PostController::class, 'destroy']);