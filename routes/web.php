<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DisposisiController;
use App\Http\Controllers\SuratmasukController;
use App\Http\Controllers\SuratkeluarController;
use App\Http\Controllers\ExportPDFController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\UserController;

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
    return view('auth.login');
});

Route::controller(AuthController::class)->group(function() {
    // register form
    Route::get('/register', 'register')->name('auth.register')->middleware(['auth', 'can:isAdmin']);
    // store register
    Route::post('/store', 'store')->name('auth.store');
    // login form
    Route::get('/login', 'login')->name('auth.login');
    // auth proses
    Route::post('/auth', 'auth')->name('auth.authentication');
    // logout
    Route::post('/logout', 'logout')->name('auth.logout');
    // dashboard page
    Route::get('/dashboard', 'dashboard')->name('dashboard')->middleware('auth');
});

Route::resource('user', UserController::class)->middleware(['auth', 'can:isAdmin']);

Route::resource('disposisi', DisposisiController::class)->middleware('auth');
Route::delete('/disposisi/{id}', [DisposisiController::class, 'destroy'])->name('disposisi.destroy')->middleware('auth');

//Route::resource('cetak', DisposisiController::class);
// Route::get('/disposisi/{disposisi}', 'DisposisiController@show');

Route::resource('suratmasuk', SuratmasukController::class)->middleware('auth');
// Route::resource('surat_masuk', SuratMasukController::class);
// Route::get('/suratmasuk/{id}', SuratmasukController::class)->name('suratmasuk.show');

Route::resource('suratkeluar', SuratkeluarController::class)->middleware('auth');

// Route::get('/users', [UserController::class, 'index']);
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('user.destroy')->middleware('auth');

Route::get('/export-pdf', [ExportPDFController::class, 'exportPDF']);
Route::get('disposisi/{no_surat}/show/cetak-pdf', [PDFController::class, 'cetakPDF'])->name('cetakPDF');
