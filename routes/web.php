<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndexController;



Route::get('/', [IndexController::class, 'index'])->name('landing');
Route::get('category/get/sub/{id}', [IndexController::class, 'categoryGetSub'])->name('category.get.sub');
Route::get('sub/get/product/{id}', [IndexController::class, 'subGetPro'])->name('sub.get.product');

Route::view('sign-up','Auth/auth');


Route::controller(CategoryController::class)->group(function(){
    Route::get('/category', 'index')->name('category.index');

});

Route::post('/subcategory', [CategoryController::class, 'store'])->name('store.subcategory');
Route::post('/category', [CategoryController::class, 'storeCategory'])->name('store.category');

Route::post('/storeproduct', [CategoryController::class, 'storeProduct'])->name('store.product');

Route::get('products', [ProductController::class,'showProduct'])->name('products');

Route::get('sub_category/{id}', [ProductController::class,'get_Sub_Category'])->name('get.sub_category');

