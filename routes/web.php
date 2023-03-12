<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PetugasController;

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
    return view('welcome');
});

// Admin/Petugas
// Route::prefix('admin')
//     ->middleware(['auth', 'admin'])
//     ->group(function() {
//         Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
// });


// Masyarakat
// Route::prefix('masyarakat')
//     ->middleware(['auth', 'MasyarakatMiddleware'])
//     ->group(function() {
// 		Route::get('/', 'MasyarakatController@index')->name('masyarakat-dashboard');
// });






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin/pengaduan', [PengaduanController::class, 'index'])->name('admin.pengaduan');
    Route::get('/admin/pengaduan/detail/{id}', [PengaduanController::class, 'show'])->name('admin.pengaduan.detail');
    
    Route::get('/dashboard-masyarakat', [MasyarakatController::class, 'create'])->name('dashboard-masyarakat');
    Route::get('/pengaduan', [MasyarakatController::class, 'index'])->name('pengaduan-show');
    Route::post('/dashboard-masyarakat-store', [MasyarakatController::class, 'store'])->name('dashboard-masyarakat-store');
    Route::delete('/pengaduan-delete/{id}', [MasyarakatController::class, 'destroy'])->name('pengaduan-destroy');

    Route::get('/petugas', [PetugasController::class, 'index'])->name('admin.petugas');
    Route::get('/tambah-petugas', [PetugasController::class, 'create'])->name('admin.tambah-petugas');
    Route::post('/tambah-petugas-store', [PetugasController::class, 'store'])->name('admin.tambah-petugas-store');
});


require __DIR__.'/auth.php';
