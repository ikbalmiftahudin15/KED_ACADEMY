<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\LandingPageController;

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
    return view('home-page');
});

Route::get('/layanan', [LandingPageController::class, 'getlayanan'])->name('layanan');
Route::get('/kursus', [LandingPageController::class, 'getkursus'])->name('kursus');
Route::get('/tim', [LandingPageController::class, 'gettim'])->name('tim');
Route::get('/acara', [LandingPageController::class, 'getacara'])->name('acara');
Route::get('/kontak', [LandingPageController::class, 'getkontak'])->name('kontak');
