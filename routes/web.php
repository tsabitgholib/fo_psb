<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerkasController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\QrisController;
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
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

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
Route::get('/editBerkas', function () {
    return view('components/editBerkas');
});
Route::get('/berkas', function () {
    return view('components/berkas');
});
Route::get('/dashboardUser', function () {
    return view('components/dashboardUser');
});
Route::get('/jadwal', function () {
    return view('jadwal');
});
Route::get('/pengajuanBiaya', function () {
    return view('pengajuanBiaya');
});
Route::get('/', [MediaController::class, 'show']);


//===Backend Tsabit===//
//qriss
Route::get('/qris/generate', [QrisController::class, 'generate'])->name('qris.generate');
Route::get('/qris/checkStatus', [QrisController::class, 'checkStatus']);
Route::post('/qris/pushNotification', [QrisController::class, 'pushNotification']);

//pendaftaran
Route::get('/pendaftaran/getPendaftaranByUser', [PendaftaranController::class, 'getPendaftaranByUser'])->name('pendaftaran.index');
Route::post('/pendaftaran/storePendaftaran', [PendaftaranController::class, 'storePendaftaran'])->name('pendaftaran.store');

//upload berkas
Route::post('/berkas/uploadBerkas', [BerkasController::class, 'uploadBerkas']);
Route::get('/berkas/getBerkasByUser', [BerkasController::class, 'getBerkasByUser']);