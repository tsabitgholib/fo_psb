<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berkas;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BerkasController extends Controller
{
    public function uploadBerkas(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $validator = Validator::make($request->all(), [
            'name.*' => 'required|string|max:255',
            'berkas.*' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $existingCount = Berkas::where('user_id', $user->id)->count();
        $remainingSlots = 13 - $existingCount;

        if ($remainingSlots <= 0) {
            return response()->json(['error' => 'Upload limit reached (max 13 files)'], 400);
        }

        $uploadedFiles = [];
        foreach ($request->file('berkas') as $index => $file) {
            if ($index >= $remainingSlots) {
                break;
            }

            $uploadedFile = Cloudinary::upload($file->getRealPath(), [
                'folder' => 'ppdb_walisongo/berkas_siswa/' . $user->id
            ]);

            // Ambil name sesuai index, jika tidak ada pakai nama file asli
            $fileName = $request->input("name.$index") ?? pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);

            $berkas = Berkas::create([
                'user_id' => $user->id,
                'name' => $fileName,
                'file_name' => $file->getClientOriginalName(),
                'file_url' => $uploadedFile->getSecurePath(),
            ]);

            $uploadedFiles[] = $berkas;
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Berkas Berhasil diupload',
            'data' => $uploadedFiles
        ]);
    }


    public function getBerkasByUser()
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $berkas = Berkas::where('user_id', $user->id)->get();

        return response()->json([
            'status' => 'success',
            'data' => $berkas
        ]);
    }
}
