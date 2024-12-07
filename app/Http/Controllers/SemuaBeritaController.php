<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class SemuaBeritaController extends Controller
{
    public function berita()
    {
        // Ambil data berita dengan pagination (5 berita per halaman)
        $mahasiswa = News::oldest()->paginate(6);
        $beritaterbaru = News::latest()->take(6)->get();

        // Kirim data ke view
        return view('semuaberita', compact('mahasiswa', 'beritaterbaru'));
    }
}
