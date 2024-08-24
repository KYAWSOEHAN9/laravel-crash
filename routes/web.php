<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("product/create",[ProductController::class,"create"])->name("product.create");
Route::post("product/store",[ProductController::class,"store"])->name("product.store");
Route::get("product/index",[ProductController::class,"index"])->name("product.index");
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('product.destroy');