<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
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

Route::get('/', function () {
    return redirect('login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation.index');
    Route::get('/reservation/create', [ReservationController::class, 'create'])->name('reservation.create');
    Route::post('/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');
    Route::get('/reservation/edit/{reservation}', [ReservationController::class, 'edit'])->name('reservation.edit');
    Route::patch('/reservation/update/{reservation}', [ReservationController::class, 'update'])->name('reservation.update');
    Route::get('/reservation/show/{reservation}', [ReservationController::class, 'show'])->name('reservation.show');
    Route::delete('/reservation/delete/{reservation}', [ReservationController::class, 'destroy'])->name('reservation.destroy');
    Route::get('/reservation/upload', [ReservationController::class, 'uploadForm'])->name('reservation.upload');
    Route::post('/reservation/import', [ReservationController::class, 'import'])->name('reservation.import');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
