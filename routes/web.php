<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtistController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/form', [ArtistController::class, 'addArtist'])->name("addArtist");
Route::post('/form', [ArtistController::class, 'submitArtist'])->name("submitArtist");
Route::get('/formConfirm', [ArtistController::class, 'confirmArtist'])->name("confirmArtist");