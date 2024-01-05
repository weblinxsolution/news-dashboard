<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
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

// Admin Start
Route::prefix('admin')->group(function () {
    Route::get('/website', [AdminController::class, 'Website'])->name('admin.index');

});
// Admin End


// Seller Route Start
Route::prefix('seller')->group(function () {
    Route::get('/index', [SellerController::class, 'Index'])->name('seller.index');

    // Add Website Routes Start
    Route::get('/add-web', [SellerController::class, 'AddWeb'])->name('seller.addWeb');
    Route::post('/addWebUrl', [SellerController::class, 'AddWebUrl'])->name('seller.addWebUrl');
    Route::get('/add-web-complete', [SellerController::class, 'AddWebComplete'])->name('seller.addWebComplete');
    Route::post('/add-web-complete', [SellerController::class, 'AddWebCompleteDb'])->name('seller.addWebCompleteDb');
    Route::get('/verify-web', [SellerController::class, 'VerifyWeb'])->name('seller.verifyWeb');
    Route::get('/finish', [SellerController::class, 'Finish'])->name('seller.finish');
});
// Seller Route End



Route::get('/', function () {
    return view('welcome');
});
