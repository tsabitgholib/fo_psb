<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    public function getPendaftaranByUser()
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['error' => 'unauthorized'], 401);
        }

        $pendaftaran = Pendaftaran::where('user_id', $user->id)->first();

        return response()->json([
            'status' => 'success',
            'data' => $pendaftaran
        ]);
    }

    public function storePendaftaran(Request $request)
    {
        try {
            $user = Auth::user();
    
            if (!$user) {
                return response()->json(['error' => 'unauthorized'], 401);
            }
    
            $request->validate([
                'nisn' => 'required|numeric|unique:pendaftarans,nisn,' . $user->id . ',user_id',
                'tempat_lahir' => 'required|string|max:255',
                'tanggal_lahir' => 'required|date',
                'alamat' => 'required|string',
                'nama_ayah' => 'required|string|max:255',
                'nama_ibu' => 'required|string|max:255',
                'pekerjaan_ayah' => 'nullable|string|max:255',
                'pekerjaan_ibu' => 'nullable|string|max:255',
                'penghasilan_ortu' => 'nullable|numeric',
            ]);
    
            $pendaftaran = Pendaftaran::updateOrCreate(
                ['user_id' => $user->id],
                $request->all() + ['status' => 'draft']
            );
    
            return response()->json([
                'status' => 'success',
                'message' => 'Pendaftaran berhasil disimpan.',
                'data' => $pendaftaran
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 500);
        }
    }
    
    
}
