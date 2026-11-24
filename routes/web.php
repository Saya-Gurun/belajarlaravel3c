<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

route::resource('products', ProductController::class);

Route::get('/', function () {
    return view('welcome');
});
