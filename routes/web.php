<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PolicieController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

// Brand List
Route::get('/brandlist', [BrandController::class, 'BrandList']);

// Category List
Route::get('/categorylist', [CategorieController::class, 'CategoryList']);

// Product List
Route::get('/ListProductByCategory/{id}', [ProductsController::class, 'ListProductByCategory']);
Route::get('/ListProductByBrand/{id}', [ProductsController::class, 'ListProductByBrand']);
Route::get('/ListProductByRemark/{id}', [ProductsController::class, 'ListProductByRemark']);


// Slider
Route::get('/ListProductSlider', [ProductsController::class, 'ListProductSlider']);

// Product Details
Route::get('/ProductDetailsById/{id}', [ProductsController::class, 'ProductDetailsById']);
Route::get('/ListReviewByProduct/{product_id}', [ProductsController::class, 'ListReviewByProduct']);
// policy

Route::get('/PolicyByType/{type}', [PolicieController::class, 'PolicyByType']);
