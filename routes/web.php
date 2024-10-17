<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
Route::get('/', function () {
    return view('welcome');
})->name('upload.form');


Route::get('/', [UploadController::class, 'index'])->name('home');
Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');
Route::get('/upload', [UploadController::class, 'showUploadForm'])->name('upload.form');
// Route cho trang thành công sau khi tải lên
Route::get('/upload/success/{imageId}', [UploadController::class, 'showSuccessPage'])->name('upload.success');