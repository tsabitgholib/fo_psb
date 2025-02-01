<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/pendaftaran', function () {
    return view('dashboard');
});
// Route::get('/', function () {
//     return view('dashboard');
// });
Route::post('/register', [AuthController::class, 'store'])->name('register.store');

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/formLengkap', function () {
    return view('components/formLengkap');
});
Route::get('/berkas', function () {
    return view('components/berkas');
});
Route::get('/jadwal', function () {
    return view('jadwal');
});
Route::get('/pengajuanBiaya', function () {
    return view('pengajuanBiaya');
});
Route::get('/', [MediaController::class, 'show']);

// ROUTE QRIS BANG
Route::get('/qris/{qrData}', function ($qrData) {
    return view('qris', ['qrData' => $qrData]);
})->name('qris.show');