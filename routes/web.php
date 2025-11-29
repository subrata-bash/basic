<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// admin routes
Route::middleware('auth')->group(function () {
    Route::get('/admin/logout', [AdminController::class, 'adminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'adminProfile'])->name('admin.profile');
    Route::post('/admin/profile/update', [AdminController::class, 'adminProfileStore'])->name('admin.profile.store');
    Route::post('/admin/password/update', [AdminController::class, 'adminPasswordUpdate'])->name('admin.password.update');
});

Route::middleware('auth')->group(function () {
   Route::controller(ReviewController::class)->group(function () {
       Route::get('/all/review', 'allReview')->name('all.review');
       Route::get('/add/review', 'addReview')->name('add.review');
       Route::post('/store/review', 'storeReview')->name('store.review');
       Route::get('/edit/review/{id}', 'editReview')->name('edit.review');
       Route::post('/update/review', 'updateReview')->name('update.review');
       Route::get('/delete/review/{id}', 'deleteReview')->name('delete.review');
   });
});


Route::middleware('auth')->group(function () {
    Route::controller(SliderController::class)->group(function () {
        Route::get('/get/slider', 'getSlider')->name('get.slider');
    });
});
require __DIR__ . '/auth.php';
