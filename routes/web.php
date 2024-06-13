<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Reservasi;
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

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/home', function () {
    return redirect('/dashboard');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/reload-captcha', [AuthController::class, 'reloadCaptcha']);

    Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// ///////////////////////// --> PAGE TAMU IS START
Route::get('/dashboard', [Dashboard::class, 'index']);
Route::get('/dashboard/room', [Reservasi::class, 'index']);

// ///////////////////////// --> PAGE TAMU IS END

Route::middleware('userAkses:admin')->group(function () {
});

Route::middleware('userAkses:resepsionis')->group(function () {
});