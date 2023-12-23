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


