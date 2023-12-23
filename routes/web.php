<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductContoller;

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

Route::view('/', 'welcome')->name('home');
Route::get('/products', [ProductContoller::class, 'showProduct'])->name('product.show');
Route::get('/products/list', [ProductContoller::class, 'showListProduct'])->name('product.list');
Route::get('/products/add', [ProductContoller::class, 'showAddProductForm'])->name('product.add');
Route::post('/products/save', [ProductContoller::class, 'handleAddProduct'])->name('product.save');
Route::get('/products/delete/{id}', [ProductContoller::class, 'handleDeleteProduct'])->name('product.delete');
Route::get('/products/edit/{id}', [ProductContoller::class, 'handleEditProduct'])->name('product.edit');
Route::post('/products/update', [ProductContoller::class, 'handleUpdateProduct'])->name('product.update');


