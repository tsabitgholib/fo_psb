<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MediaController;
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

//qriss
Route::get('/qris/generate', [QrisController::class, 'generate'])->name('qris.generate');
Route::get('/qris/checkStatus', [QrisController::class, 'checkStatus']);
Route::post('/qris/pushNotification', [QrisController::class, 'pushNotification']);
Route::get('/qris/pushNotification', [QrisController::class, 'pushNotification']);