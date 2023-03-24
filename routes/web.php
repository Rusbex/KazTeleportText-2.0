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

Route::get('/', [\App\Http\Controllers\GalleryController::class, 'index'])->name('home');
Route::get('/photo/{id}', [\App\Http\Controllers\PhotoController::class, 'show'])->name('show');
Route::get('/next-photos', [\App\Http\Controllers\GalleryController::class, 'getNextPhotos'])->name('get-next-photos');
//Route::get('/photo/{photo}', [\App\Http\Controllers\PhotoController::class, 'show'])->name('show');

//Route::get('/photos/{id}/favorite', [\App\Http\Controllers\FavoriteController::class,'store'])->name('home');



//Route::get('/get-next-photos', [\App\Http\Controllers\GalleryController::class,'getNextPhotos'])->name('get-next-photos');
//Route::get('/photos/{id}', 'GalleryController@show')->name('photos.show'); // отображение информа.ции о фотографии
//Route::post('/photos/{id}/favorite', 'GalleryController@toggleFavorite')->name('favourites'); // добавление/удаление фотографии в/из избранного


