<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\UnitController;
use App\Http\Controllers\Api\SupplierController;
use App\Http\Controllers\Api\TransactionController;

Route::apiResource('products', ProductController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('unit', UnitController::class);
Route::apiResource('suppliers', SupplierController::class);
Route::apiResource('transactions', TransactionController::class);