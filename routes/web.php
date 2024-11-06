<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;

// User-facing routes
Route::get('/', [PageController::class, 'landingPage']);
Route::get('/bidang1', [PageController::class, 'bidang1']);
Route::get('/bidang2', [PageController::class, 'bidang2']);
Route::get('/bidang3', [PageController::class, 'bidang3']);
Route::get('/detail-bidang', [PageController::class, 'detailBidang']);

// Admin routes
Route::get('/dashboard-admin', [AdminController::class, 'dashboard']);
Route::get('/master-data', [AdminController::class, 'masterData'])->name('master-data');
Route::post('/master-data', [AdminController::class, 'storeData']);
Route::get('master-data/{id}', [AdminController::class, 'viewData'])->name('master-data.view');
Route::get('/master-data/{id}/edit', [AdminController::class, 'editData']);
Route::put('/master-data/{id}', [AdminController::class, 'updateData']);
Route::delete('/master-data/{id}', [AdminController::class, 'deleteData']);