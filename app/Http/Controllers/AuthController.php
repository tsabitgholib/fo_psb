<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
                'password' => 'required|string|min:6',
            ]);

            $no_hp = preg_replace('/\D/', '', $validatedData['no_hp']);
            $no_hp = substr($no_hp, -10);

            if (User::where('no_hp', $no_hp)->exists()) {
                return back()->with('error', 'Nomor HP sudah terdaftar.');
            }
            $vaNumber = '777777' . str_pad($no_hp, 10, '0', STR_PAD_LEFT);   
                       
    
            $user = User::create([
                'nama_siswa' => $validatedData['nama_siswa'],
                'nama_orang_tua' => $validatedData['nama_orang_tua'],
                'no_hp' => $validatedData['no_hp'],
                'jenis_kelamin' => $validatedData['jenis_kelamin'],
                'sekolah' => $validatedData['sekolah'],
                'password' => bcrypt($validatedData['password']),
                'tagihan' => '1',
                'created_time' => substr((string) intval(microtime(true) * 1000), -8),
                'va_number' => (int) $vaNumber,
                'lunas' => false
            ]);
    
            return redirect()->route('qris.generate', ['createdTime' => $user->created_time])
                             ->with('success', 'Registrasi berhasil!');
        } catch (\Exception $e) {
            Log::error('Registrasi gagal: ' . $e->getMessage());
    
            return back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    
    public function login(Request $request)
    {
        $request->validate([
            'no_hp' => 'required|numeric',
            'password' => 'required|min:6',
        ]);
        $user = User::where('no_hp', $request->no_hp)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            if ($user->lunas) {
                Auth::login($user);
                return redirect('/profile');
            } else {
                return redirect()->back()->withErrors(['lunas' => 'Akun Anda belum lunas.']);
            }
        } else {
            return redirect()->back()->withErrors(['login' => 'Nomor HP atau password salah.']);
        }
    }

}
