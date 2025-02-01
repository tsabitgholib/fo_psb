<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'nama_siswa' => 'required|string|max:255',
                'nama_orang_tua' => 'required|string|max:255',
                'no_hp' => 'required|numeric',
                'jenis_kelamin' => 'required',
                'sekolah' => 'required',
                'password' => 'required|string|min:8',
            ]);
    
            $user = User::create([
                'nama_siswa' => $validatedData['nama_siswa'],
                'nama_orang_tua' => $validatedData['nama_orang_tua'],
                'no_hp' => $validatedData['no_hp'],
                'jenis_kelamin' => $validatedData['jenis_kelamin'],
                'sekolah' => $validatedData['sekolah'],
                'password' => bcrypt($validatedData['password']),
                'tagihan' => '90000',
                'created_time' => '12345678',
                'va_number' => '1234567891212877',
                'lunas' => false
            ]);
    
            return redirect()->route('qris.generate', ['createdTime' => $user->created_time])
                             ->with('success', 'Registrasi berhasil!');
        } catch (\Exception $e) {
            Log::error('Registrasi gagal: ' . $e->getMessage());
    
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    

}
