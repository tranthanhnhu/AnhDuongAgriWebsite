<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Upload route without CSRF protection (for CKEditor)
Route::match(['GET', 'POST'], 'admin/upload/image', [ApiController::class, 'uploadImage'])->name('api.upload.image');
