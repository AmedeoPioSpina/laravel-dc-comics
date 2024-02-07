<?php

use App\Http\Controllers\ComicsController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/comics', [ComicsController::class, 'index'])->name('guest.comics.index');
Route::post('/comics', [ComicsController::class, 'store'])->name('guest.comics.store');
Route::get('/comics/create', [ComicsController::class, 'create'])->name('guest.comics.create');
Route::get('/comics/{comic}', [ComicsController::class, 'show'])->name('guest.comics.show');