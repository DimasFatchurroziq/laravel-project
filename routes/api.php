<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index']);      // Get all products
Route::get('/products/{id}', [ProductController::class, 'show']);  // Get product by ID
Route::post('/products', [ProductController::class, 'store']);     // Create new product
Route::put('/products/{id}', [ProductController::class, 'update']); // Update existing product
Route::delete('/products/{id}', [ProductController::class, 'destroy']); // Delete product