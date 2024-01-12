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
Route::get('/admin/fakeAdmin', [AdminController::class, 'fakeAdmin'])->name('admin.fakeAdmin');
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login-check', [AdminController::class, 'login_check'])->name('admin.loginCheck');
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware(['AdminAuth'])->prefix('admin')->group(function () {
    Route::get('/website', [AdminController::class, 'Website'])->name('admin.index');
    Route::get('/approved-website/{id}', [AdminController::class, 'ApprovedWebsite'])->name('admin.approvedWeb');
    Route::post('/approved-website-db/{id}', [AdminController::class, 'ApprovedWebsiteDb'])->name('admin.approvedWebDb');
    Route::get('/approved-website-edit/{id}', [AdminController::class, 'ApprovedWebsiteEdit'])->name('admin.approvedWebEdit');
    Route::post('/approved-website-edit-db/{id}', [AdminController::class, 'ApprovedWebsiteEditDb'])->name('admin.approvedWebEditDb');
});
// Admin End




// Seller Route Start
Route::get('/seller/fakeUser', [SellerController::class, 'fakeUser'])->name('seller.fakeUser');
Route::get('/seller/login', [SellerController::class, 'login'])->name('seller.login');
Route::post('/seller/login-check', [SellerController::class, 'login_check'])->name('seller.loginCheck');
Route::get('/seller/logout', [SellerController::class, 'logout'])->name('seller.logout');

Route::middleware(['UserAuth'])->prefix('seller')->group(function () {
    Route::get('/website', [SellerController::class, 'website'])->name('seller.website');

    // Add Website Routes Start
    Route::get('/add-web', [SellerController::class, 'AddWeb'])->name('seller.addWeb');
    Route::post('/addWebUrl', [SellerController::class, 'AddWebUrl'])->name('seller.addWebUrl');
    Route::get('/add-web-complete', [SellerController::class, 'AddWebComplete'])->name('seller.addWebComplete');
    Route::post('/add-web-complete', [SellerController::class, 'AddWebCompleteDb'])->name('seller.addWebCompleteDb');
    Route::get('/web-edit/{id}', [SellerController::class, 'EditWeb'])->name('seller.editWeb');
    Route::get('/web-delete/{id}', [SellerController::class, 'WebDelete'])->name('seller.webDeleteDb');
    Route::get('/verify-web', [SellerController::class, 'VerifyWeb'])->name('seller.verifyWeb');
    Route::get('/finish', [SellerController::class, 'Finish'])->name('seller.finish');
});
// Seller Route End



Route::get('/', function () {
    return view('welcome');
});
