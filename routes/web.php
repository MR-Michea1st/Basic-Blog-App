<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Carbon\Traits\ToStringFormat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('app', function () {
    return view('template.app');
});


Route::get('register' , [AuthController::class , 'showRegister']);
Route::get('login' , [AuthController::class , 'showLogin'])->name('login');
Route::get('logout' , [AuthController::class , 'logout']);
Route::post('register' , [AuthController::class,'storeUser']);
Route::post('login' , [AuthController::class , 'loginUser']);



Route::get('post_edit/{id}' , [PostController::class , 'editPost' , 'id'])->middleware('auth');
Route::post('post_edit/post_upd/{id}' , [PostController::class , 'update' , 'id'])->middleware('auth');
Route::get('post_list/{id}' , [PostController::class, 'show'  , 'id']);
Route::get('post_create',[PostController::class,'create'])->middleware('auth');

Route::post('posts' , [PostController::class,'store'])->middleware('auth');

Route::get('post_list' , [PostController::class ,'index']);