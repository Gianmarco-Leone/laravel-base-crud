<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\SongController;

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

Route::get('/', [PageController::class, 'homepage'])->name('home');

Route::resource('songs', SongController::class);

// * Rotta per la visualizzazione della lista
// Route::get('/songs', [SongController::class, 'index'])->name('songs.index');

// * Rotta per la visualizzazione del dettaglio
// Route::get('/songs/{song}', [SongController::class, 'show'])->name('songs.show');

// * Rotta per la visualizzazione del form
// Route::get('/songs/create', [SongController::class, 'create'])->name('songs.create');

// * Rotta per il salvataggio dei dati
// Route::post('/songs', [SongController::class, 'store'])->name('songs.store');