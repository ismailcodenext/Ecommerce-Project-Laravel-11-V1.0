<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductCategoryController;

// Route::post("/section-by-id", [ProductCategoryController::class, 'SectionById'])->middleware('auth:sanctum');
// Route::post("/update-section", [ProductCategoryController::class, 'SectionUpdate'])->middleware('auth:sanctum');
// Route::post("/delete-section", [ProductCategoryController::class, 'SectionDelete'])->middleware('auth:sanctum');

Route::view('/ayrveda-login-page', 'components.front-end.auth.registration-form');



// Front-end All Page View Route start

Route::view('/', 'components.front-end.home-page');
Route::view('home-page', 'components.front-end.home-page');
Route::view('about-page', 'components.front-end.about-page');
Route::view('shop-page', 'components.front-end.product-page');





// Dashboard All Page Viwe Route start
// user view page 
Route::view('/userProfile', 'components.back-end.user-profile');

// User API Route 
Route::post('/user-update', [UserController::class, 'UpdateProfile'])->middleware('auth:sanctum');
Route::get('/userlogout', [UserController::class, 'UserLogout'])->middleware('auth:sanctum');



Route::view('/dashboardSummary', 'components.back-end.dasboardsummary');
Route::view('/dashboard-product-category', 'pages.back-end.category-page');
Route::view('/dashboard-brand', 'pages.back-end.brand-page');
Route::view('/dashboard-product', 'pages.back-end.product-page');


