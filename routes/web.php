<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrudFasilitasHotel;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\History;
use App\Http\Controllers\ResepsionisController;
use App\Http\Controllers\ReservasiController;
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
Route::get('/home', function () {
    return redirect('/dashboard');
});

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/logout', [AuthController::class, 'logout']);

// Route::get('/reload-captcha', [AuthController::class, 'reloadCaptcha']);

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// ///////////////////////// --> PAGE TAMU IS START
Route::get('/dashboard', [Dashboard::class, 'index']);
Route::get('/dashboard/room', [ReservasiController::class, 'index'])->name('reservasi.index');
Route::get('/dashboard/room/book/{id}', [ReservasiController::class, 'showBookingForm'])->name('book.show');
Route::post('/dashboard/room/book', [ReservasiController::class, 'storeBooking'])->name('book.store');
Route::get('/dashboard/history', [History::class, 'index'])->name('history.index');
Route::get('/generate-pdf/{id}', [History::class, 'generatePDF'])->name('generate.pdf');
// ///////////////////////// --> PAGE TAMU IS END

Route::middleware(['userAkses:admin'])->group(function () {
    // ///////////////////////// --> CRUD FASILITAS IS START
    Route::get('/dashboard/admin/fasilitas', [CrudFasilitasHotel::class, 'index'])->name('CF.index');
    // ///////////////////////// --> CRUD FASILITAS IS END

    // ///////////////////////// --> CRUD USER IS START
    // Route::get('/dashboard/admin/user', [CrudFasilitasHotel::class, 'index'])->name('CU.index');
// ///////////////////////// --> CRUD USER IS END

    // ///////////////////////// --> CRUD KAMAR IS START
    // Route::get('/dashboard/admin/kamar', [CrudFasilitasHotel::class, 'index'])->name('CK.index');
// ///////////////////////// --> CRUD KAMAR IS END
});

Route::middleware('userAkses:resepsionis')->group(function () {
    Route::get('/dashboard/resepsionis', [ResepsionisController::class, 'index'])->name('resepsionis.index');
    Route::post('/dashboard/resepsionis/check-in/{id}', [ResepsionisController::class, 'checkIn'])->name('resepsionis.checkin');
    Route::post('/dashboard/resepsionis/check-out/{id}', [ResepsionisController::class, 'checkOut'])->name('resepsionis.checkout');
});