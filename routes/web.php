<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\IndexControllar;

use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index']);
Route::get('/post', [PostController::class, 'index']);
Route::get('/product', [ProductController::class,'product']);
Route::get('/dash', [DashController::class,'dash']);
Route::get('/footer', [FooterController::class,'footer']);
Route::get('/index', [IndexControllar::class,'body']);

