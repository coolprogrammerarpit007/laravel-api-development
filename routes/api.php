<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\StoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/test',function(){
    return ['message' => 'Api is working Nice!'];
});


// Api Routes for Posts
Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
Route::get('/posts/{id}',[PostController::class,'show'])->name('posts.show');


Route::apiResource('stories',StoryController::class);
