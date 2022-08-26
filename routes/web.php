<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
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
Route::middleware(['auth'])->group(function () {
    Route::resource('posts', PostController::class)->except('index');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/', [PostController::class, 'index'])->name('posts.index');



require __DIR__.'/auth.php';