<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use \App\Http\Controllers\NewController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\OrderController;

use \App\Http\Controllers\Admin\MainController as AdminMainController;
use \App\Http\Controllers\Admin\ProductController as AdminProductController;
use \App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/news', [NewController::class, 'news'])->name('news');
Route::get('/news/{id}', [NewController::class, 'newsItem'])->name('newsItem');

//Route::get('/product', [ProductController::class, 'products'])->name('products');
Route::get('/product/{id}', [ProductController::class, 'productItem'])->name('product');

//Route::get('/categories', [CategoryController::class, 'categories'])->name('categories');
Route::get('/category/{id}', [CategoryController::class, 'category'])->name('category');

Route::post('/order', [OrderController::class, 'create'])->name('orderCreate');

Route::prefix('admin')->middleware(\App\Http\Middleware\Admin::class)->group(function () {
    Route::get('/', [AdminMainController::class, 'index'])->name('adminIndex');

    Route::get('/product', [AdminProductController::class, 'index'])->name('products');
    Route::get('/product/create', [AdminProductController::class, 'create']);
    Route::post('/product/create', [AdminProductController::class, 'store'])->name('productStore');
    Route::get('/product/{id}', [AdminProductController::class, 'show'])->name('productShow');
    Route::get('/product/{id}/edit', [AdminProductController::class, 'edit']);
    Route::post('/product/{id}/edit', [AdminProductController::class, 'update'])->name('productUpdate');
    Route::get('/product/{product}/delete', [AdminProductController::class, 'destroy'])->name('productDestroy');

    Route::get('/category', [AdminCategoryController::class, 'index'])->name('categories');
    Route::get('/category/create', [AdminCategoryController::class, 'create']);
    Route::post('/category/create', [AdminCategoryController::class, 'store'])->name('categoryStore');
    Route::get('/category/{id}', [AdminCategoryController::class, 'show'])->name('categoryShow');
    Route::get('/category/{id}/edit', [AdminCategoryController::class, 'edit']);
    Route::post('/category/{id}/edit', [AdminCategoryController::class, 'update'])->name('categoryUpdate');
    Route::get('/category/{category}/delete', [AdminCategoryController::class, 'destroy'])->name('categoryDestroy');

    Route::get('/order', [OrderController::class, 'index'])->name('orders');
});


