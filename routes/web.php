<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'db'])->name('db');
Route::get('/category/{id}', [ProductController::class, 'category'])->name('category');
Route::get('/tag/{id}', [ProductController::class, 'tag'])->name('tag');

Route::get('/product-create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product-store', [ProductController::class, 'store'])->name('product.store');
