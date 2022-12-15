<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/orders', [App\Http\Controllers\OrderController::class, 'index'])->name('orders');
Route::get('/orders/create', [App\Http\Controllers\OrderController::class, 'create'])->name('orders.create');
Route::post('/orders/create', [App\Http\Controllers\OrderController::class, 'store'])->name('orders.store');
Route::get('/orders/{order}/show', [App\Http\Controllers\OrderController::class, 'show'])->name('orders.show');
