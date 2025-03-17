<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AppUsers;
use App\Http\Controllers\StockController;

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

Route::get('/', [AppUsers::class, 'index']);
Route::post('/login', [AppUsers::class, 'verifyAppUsersAndLogin']);

Route::get('/dashboard', function () {
    return view(view: 'pages.dashboard');
});
Route::get('/create-stock-item', function () {
    return view(view: 'pages.stock-item');
});

// Route::get('/stock', [StockController::class, 'index'])->name('stock');
Route::get('/stock-item', [StockController::class, 'index'])->name('stock.index');
Route::post('/stock-save', [StockController::class, 'store'])->name('stock.name');
Route::get('/edit-stock/{id?}', [StockController::class, 'edit']);
Route::post('/update-stock-item/{id?}', [StockController::class, 'update'])->name('stock.update');
Route::get('/stock-delete/{id?}', [StockController::class, 'delete'])->name('stock.delete');

Route::get('/view-stock-item', function () {
    return view(view: 'pages.search');
});
Route::get('/edit-stock-item/{id?}', function () {
    return view(view: 'pages.edit-stock-item');
});
Route::get('/day-book', function () {
    return view(view: 'pages.day-book');
});
Route::get('/create-entry', function () {
    return view(view: 'pages.entry-challan');
});
Route::get('/create-exit', function () {
    return view(view: 'pages.exit-challan');
});