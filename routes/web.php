<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\MusicController;
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




// FRONTEND ROUTE 

Route::get('/', [MainController::class, 'index'])->name('index');

// routes/web.php

Route::prefix('admin')->group(function () {
    Route::get('musics', [MusicController::class, 'index'])->name('music.index');
    Route::get('musics/create', [MusicController::class, 'create'])->name('music.create');
    Route::post('musics', [MusicController::class, 'store'])->name('music.store');
    Route::get('musics/{music}/edit', [MusicController::class, 'edit'])->name('music.edit');
    Route::put('musics/{music}', [MusicController::class, 'update'])->name('music.update');
    Route::get('musics/{music}', [MusicController::class, 'show'])->name('music.show');
});
