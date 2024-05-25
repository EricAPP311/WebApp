<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return redirect('login');
// });

// Route::get('/', function () {
//     return view('landing-page.home');
// });
Route::get('/', [HomeController::class, 'index'])->name('landing.home');
Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login');
Route::get('/reservation', [ReservationController::class, 'landing'])->name('landing.reservation');
Route::post('/reservation/store', [ReservationController::class, 'store'])->name('landing.reservation-store');

Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin/reservation', [ReservationController::class, 'index'])->name('reservation.index');
    Route::get('/admin/reservation/create', [ReservationController::class, 'create'])->name('reservation.create');
    Route::post('/admin/reservation/store', [ReservationController::class, 'store'])->name('reservation.store');
    Route::get('/admin/reservation/edit/{reservation}', [ReservationController::class, 'edit'])->name('reservation.edit');
    Route::patch('/admin/reservation/update/{reservation}', [ReservationController::class, 'update'])->name('reservation.update');
    Route::get('/admin/reservation/show/{reservation}', [ReservationController::class, 'show'])->name('reservation.show');
    Route::delete('/admin/reservation/delete/{reservation}', [ReservationController::class, 'destroy'])->name('reservation.destroy');
    Route::get('/admin/reservation/delete/{reservation}', [ReservationController::class, 'destroy'])->name('reservation.destroy');
    Route::get('/admin/reservation/upload', [ReservationController::class, 'uploadForm'])->name('reservation.upload');
    Route::post('/admin/reservation/import', [ReservationController::class, 'import'])->name('reservation.import');

    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
