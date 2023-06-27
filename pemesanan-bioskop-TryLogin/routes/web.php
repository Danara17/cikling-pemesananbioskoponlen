<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\JadwalTayangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PemesananController;
use Illuminate\Support\Facades\Route;
use App\Models\Film;
use App\Models\Pemesanan;

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
Route::get('/', [HalamanController::class, 'showHomePage'])->name('homepage');
Route::get('/login', [HalamanController::class, 'showLoginPage'])->name('loginpage');
Route::post('/login', [LoginController::class, 'postLogin'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/playing-now', [HalamanController::class, 'showPlayingNow'])->name('playing-now');
Route::get('/coming-soon', [HalamanController::class, 'showUpComing'])->name('coming-soon');
Route::get('/movie/{id}', [HalamanController::class, 'showDetail'])->name('DetailMovie');
Route::get('/moviesoon/{id}', [HalamanController::class, 'showDetailSoon'])->name('DetailSoonMovie');
Route::get('/myprofile', [HalamanController::class, 'showProfile'])->name('showProfile');

Route::get('/buyticket/{id}', [FilmController::class, 'buyTicket'])->name('buyticket');
Route::get('/tayang-admin', [FilmController::class, 'showTayang'])->name('showTayang');
Route::get('/add-tayang-admin', [FilmController::class, 'showAddTayang'])->name('showAddTayang');
Route::post('/add-tayang-post', [FilmController::class, 'addTayang'])->name('addTayang');
Route::post('/edit-tayang-post', [FilmController::class, 'editTayang'])->name('editTayang');
Route::get('/edit-tayang/{id}', [FilmController::class, 'showEditTayang'])->name('editTayang');
Route::get('/delete-tayang/{id}', [FilmController::class, 'deleteTayang'])->name('deleteTayang');

Route::get('/add-pelanggan-show', [PelangganController::class, 'showAddPelanggan'])->name('showAddPelanggan');
Route::post('/add-pelanggan-post', [PelangganController::class, 'addPelanggan'])->name('addPelangganPost');
Route::post('/edit-pelanggan-post', [PelangganController::class, 'editPelanggan'])->name('editPelangganPost');
Route::get('/table-pelanggan', [PelangganController::class, 'showPelanggan'])->name('showPelanggan');
Route::get('/edit-pelanggan/{id}', [PelangganController::class, 'showEditPelanggan'])->name('showEditPelanggan');

Route::get('/tambah-tayang/{id}', [JadwalTayangController::class, 'addJadwal'])->name('addJadwal');

Route::get('/tesapi', [MovieController::class, 'index'])->name('showPopularAPI');
Route::get('/detail/film/buy', [HalamanController::class, 'detailed'])->name('movieDetailed');
Route::get('/proses-pemesanan', [PemesananController::class, 'pesan'])->name('prosesbayar');

Route::get('/myticket', [HalamanController::class, 'showTicket'])->name('myTicket');