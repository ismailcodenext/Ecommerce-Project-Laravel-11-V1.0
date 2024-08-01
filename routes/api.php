<?php

use App\Http\Controllers\BrandController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');





Route::post('/user-registration', [UserController::class, 'UserRegistration']);
Route::post('/user-login', [UserController::class, 'UserLogin']);


Route::get('/user-profile', [UserController::class, 'UserProfile'])->middleware('auth:sanctum');




/// Product Category all Api
Route::get("/product-category-list", [ProductCategoryController::class, 'ProductCategoryList'])->middleware('auth:sanctum');
Route::post("/create-product-category", [ProductCategoryController::class, 'ProductCategoryCreate'])->middleware('auth:sanctum');
Route::post("/product-category-by-id", [ProductCategoryController::class, 'ProductCategoryById'])->middleware('auth:sanctum');
Route::post("/update-product-category", [ProductCategoryController::class, 'ProductCategoryUpdate'])->middleware('auth:sanctum');
Route::post("/delete-product-category", [ProductCategoryController::class, 'ProductCategoryDelete'])->middleware('auth:sanctum');




/// Brand all Api
Route::get("/brand-list", [BrandController::class, 'BrandList'])->middleware('auth:sanctum');
Route::post("/create-brand", [BrandController::class, 'BrandCreate'])->middleware('auth:sanctum');
Route::post("/brand-by-id", [BrandController::class, 'BrandById'])->middleware('auth:sanctum');
Route::post("/update-brand", [BrandController::class, 'BrandUpdate'])->middleware('auth:sanctum');
Route::post("/delete-brand", [BrandController::class, 'BrandDelete'])->middleware('auth:sanctum');




/// Product all Api

Route::get("/product-Data", [ProductController::class, 'index']);


Route::get("/product-list", [ProductController::class, 'ProductList'])->middleware('auth:sanctum');
Route::post("/create-product", [ProductController::class, 'ProductCreate'])->middleware('auth:sanctum');
Route::post("/product-by-id", [ProductController::class, 'ProductById'])->middleware('auth:sanctum');
Route::post("/update-product", [ProductController::class, 'ProductUpdate'])->middleware('auth:sanctum');
Route::post("/delete-product", [ProductController::class, 'ProductDelete'])->middleware('auth:sanctum');

