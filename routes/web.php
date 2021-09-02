<?php

use App\Http\Controllers\FrontController;
use App\Http\Livewire\Admin\Artikel as AdminArtikel;
use App\Http\Livewire\Artikel;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('pages.front.home');
// });

Route::get('/', [FrontController::class, 'home']);
Route::get('/artikel/{slug}', [FrontController::class, 'detailArtikel'])->name('detail-artikel');
Route::post('komentar/create/{id}', [FrontController::class, 'createKomen'])->name('create-komen');
Route::get('/artikel', Artikel::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// admin
Route::prefix('admin')->middleware(['admin', 'auth'])->group(function () {
    Route::get('/artikel', AdminArtikel::class)->name('artikel');
    Route::get('test', function () {
        return view('layouts.admin');
    });
});
// Route::get('admin/artikel', function () {
//     return view('layouts.admin');
// });
