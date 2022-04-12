<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\CategoryController;

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
Route::get('/backoffice', [HomeController::class, 'backoffice']);

// Categories
Route::get('/categories', [CategoryController::class, 'getCategories']);



// Categories CRUD
Route::get('/backoffice/categories', [CategoryController::class, 'getCategories']);


// Artists
Route::get('/artists', [ArtistController::class, 'getArtists']);

// Artists CRUD
// Create
Route::get('/backoffice/artist/create', [ArtistController::class, 'createArtist'])->name("createArtist");
Route::post('/backoffice/artist/create', [ArtistController::class, 'newArtist'])->name("newArtist");

// Read
Route::get('/backoffice/artists', [ArtistController::class, 'getArtistsBack'])->name("allArtists");

// Update
Route::get('/backoffice/artist/edit/{id}', [ArtistController::class, 'editArtist'])->name("editArtist");
Route::put('/backoffice/artists', [ArtistController::class, 'updateArtist'])->name("updateArtist");

// Delete
Route::delete('/backoffice/artist/delete/{id}', [ArtistController::class, 'deleteArtist'])->name("deleteArtist");


// Artist Suggestions - Front-side
Route::get('/form', [ArtistController::class, 'addArtist'])->name("addArtist");
Route::post('/form', [ArtistController::class, 'submitArtist'])->name("submitArtist");
Route::get('/formConfirm', [ArtistController::class, 'confirmArtist'])->name("confirmArtist");