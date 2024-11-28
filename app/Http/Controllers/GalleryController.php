<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // Contoh data gallery
        $gallery = [
            [
                'id' => 1,
                'title' => 'Gambar 1',
                'url' => 'http://localhost:8000/images/gallery/image1.jpg',
            ],
            [
                'id' => 2,
                'title' => 'Gambar 2',
                'url' => 'http://localhost:8000/images/gallery/image2.jpg',
            ],
            // Tambahkan gambar lainnya sesuai kebutuhan
        ];

        return response()->json($gallery);
    }
}
