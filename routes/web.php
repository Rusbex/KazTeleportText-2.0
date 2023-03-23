<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', [\App\Http\Controllers\GalleryController::class,'index'])->name('home');
Route::get('/photos/{id}', [\App\Http\Controllers\PhotoController::class, 'getPhoto'])->name('get-photo');
Route::get('/next-photos', [\App\Http\Controllers\GalleryController::class, 'getNextPhotos'])->name('get-next-photos');


//Route::get('/get-next-photos', [\App\Http\Controllers\GalleryController::class,'getNextPhotos'])->name('get-next-photos');


