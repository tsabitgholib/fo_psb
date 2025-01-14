<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    // MediaController.php
public function show()
{
    // Ambil semua media
    $media = Media::all();
    $mediaUrls = [];

    // Ambil media yang ada pada kolom media_1 hingga media_5
    foreach ($media as $item) {
        for ($i = 1; $i <= 5; $i++) {
            $mediaKey = 'media_' . $i;
            if ($item->$mediaKey) {
                $mediaUrls[] = $item->$mediaKey;
            }
        }
    }

    return view('media', compact('mediaUrls'));
}
}
