<?php

use App\Http\Controllers\Page\AboutController;
use App\Http\Controllers\Page\BlogController;
use App\Http\Controllers\Page\ClassController;
use App\Http\Controllers\Page\ContactController;
use App\Http\Controllers\Page\EventController;
use App\Http\Controllers\Page\GalleryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', [PageController::class, 'home'])->name('index');
Route::resource('blog', BlogController::class);
Route::resource('about', AboutController::class);
Route::resource('galleries', GalleryController::class);
Route::resource('class', ClassController::class);
Route::resource('event', EventController::class);
Route::get('contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');
// Route::resource('/Class' )