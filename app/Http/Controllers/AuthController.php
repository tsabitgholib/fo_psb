<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama_siswa' => 'required|string|max:255',
                'nama_orang_tua' => 'required|string|max:255',
                'no_hp_register' => 'required|numeric',
                'jenis_kelamin' => 'required',
                'sekolah' => 'required',
                'password' => 'required|string|min:8',
            ]);

            User::create([
                'nama_siswa' => $validatedData['nama_siswa'],
                'nama_orang_tua' => $validatedData['nama_orang_tua'],
                'no_hp' => $validatedData['no_hp_register'],
                'jenis_kelamin' => $validatedData['jenis_kelamin'],
                'sekolah' => $validatedData['sekolah'],
                'password' => bcrypt($validatedData['password']),
                'tagihan' => '90000',
                'created_time' => '12345678',
                'lunas' => false
            ]);

            return redirect('/profile')->with('success', 'Registrasi berhasil!');
        } catch (\Exception $e) {
            // Set session flash data untuk pesan error
            return back()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }
}
