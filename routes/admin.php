<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SilderController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\TeacherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function (){
    Route::resource('posts', BlogController::class);
    Route::resource('Tags', TagController::class);
    Route::resource('programs', EventController::class);
    Route::resource('rooms', ClassController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('silder', SilderController::class);
    Route::resource('aboutus', AboutController::class);
    Route::resource('teacher', TeacherController::class);
    Route::resource('contacter', ContactController::class);
    Route::get('/', [HomeController::class, 'dashboard'])->name('home-dashboard');
});

