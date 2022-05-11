<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
  return view('main');
});

Route::get('/products/get', [ProductController::class, 'all']);
Route::get('/products/search', [ProductController::class, 'search']);
