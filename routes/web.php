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
    Route::get('/siswa', [DataController::class, 'indexSiswa'])->name('siswa');
    Route::get('/siswa/create', [DataController::class, 'createSiswa']);
    Route::post('/siswa/store', [DataController::class, 'storeSiswa']);
    Route::get('/siswa/edit/{id}', [DataController::class, 'editSiswa']);
    Route::post('/siswa/update/{id}', [DataController::class, 'updateSiswa']);
    Route::get('/siswa/delete/{id}', [DataController::class, 'deleteSiswa']);

    //Guru
    Route::get('/guru', [DataController::class, 'indexGuru'])->name('guru');
    Route::get('/guru/create', [DataController::class, 'createGuru']);
    Route::post('/guru/store', [DataController::class, 'storeGuru']);
    Route::get('/guru/edit/{id}', [DataController::class, 'editGuru']);
    Route::post('/guru/update/{id}', [DataController::class, 'updateGuru']);
    Route::get('/guru/delete/{id}', [DataController::class, 'deleteGuru']);

    //Dudi
    Route::get('/dudi', [DataController::class, 'indexDudi'])->name('dudi');
    Route::get('/dudi/create', [DataController::class, 'createDudi']);
    Route::post('/dudi/store', [DataController::class, 'storeDudi']);
    Route::get('/dudi/edit/{id}', [DataController::class, 'editDudi']);
    Route::post('/dudi/update/{id}', [DataController::class, 'updateDudi']);
    Route::get('/dudi/delete/{id}', [DataController::class, 'deleteDudi']);

});

require __DIR__.'/auth.php';
