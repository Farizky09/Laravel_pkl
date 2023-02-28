<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //Siswa
    Route::get('siswa', [DataController::class, 'indexSiswa'])->name('siswa');
    Route::get('siswa-create', [DataController::class, 'createSiswa'])->name('siswa-create');
    Route::post('siswa-create', [DataController::class, 'storeSiswa'])->name('siswa-create');
    Route::get('siswa-edit/{id}', [DataController::class, 'editSiswa'])->name('siswa-edit');
    Route::post('siswa-edit/{id}', [DataController::class, 'updateSiswa'])->name('siswa-edit');
    Route::get('siswa-delete/{id}', [DataController::class, 'deleteSiswa'])->name('siswa-delete');

    //Guru
    Route::get('guru', [DataController::class, 'indexGuru'])->name('guru');
    Route::get('guru-create', [DataController::class, 'createGuru'])->name('guru-create');
    Route::post('guru-create', [DataController::class, 'storeGuru'])->name('guru-create');
    Route::get('guru-edit/{id}', [DataController::class, 'editGuru'])->name('guru-edit');
    Route::post('guru-edit/{id}', [DataController::class, 'updateGuru'])->name('guru-edit');
    Route::get('guru-delete/{id}', [DataController::class, 'deleteGuru'])->name('guru-delete');

    //Dudi
    Route::get('dudi', [DataController::class, 'indexDudi'])->name('dudi');
    Route::get('dudi-create', [DataController::class, 'createDudi'])->name('dudi-create');
    Route::post('dudi-create', [DataController::class, 'storeDudi'])->name('dudi-create');
    Route::get('dudi-edit/{id}', [DataController::class, 'editDudi'])->name('dudi-edit');
    Route::post('dudi-edit/{id}', [DataController::class, 'updateDudi'])->name('dudi-edit');
    Route::get('dudi-delete/{id}', [DataController::class, 'deleteDudi'])->name('dudi-delete');

});

require __DIR__.'/auth.php';
