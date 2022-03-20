<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\CustomerRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

// Route::get('template/a', function () {
//     return view('layouts.app');
// });
Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function () {
    // Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('category/export', [CategoryController::class, 'export'])->name('category.export');
    Route::get('customer/export', [CustomerController::class, 'export'])->name('customer.export');
    Route::get('product/export', [ProductController::class, 'export'])->name('product.export');
    Route::get('brand/export', [BrandController::class, 'export'])->name('brand.export');
    Route::get('unit/export', [UnitController::class, 'export'])->name('unit.export');
    Route::resource('category', CategoryController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('product', ProductController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('unit', UnitController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
