<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akademis;
use Illuminate\Support\Facades\Storage;

class AkademisController extends Controller
{
    public function panduan()
    {
        // Mencari data dengan kategori 'Berita'
        $panduan = Akademis::where('kategori', 'Panduan')->first();

        // Pastikan data ditemukan
        if (!$panduan) {
            return redirect()->back()->with('error', 'Data dengan kategori Berita tidak ditemukan.');
        }

        // Mengirim data ke view
        return view('panduanakademis', compact('panduan'));
    }

    public function alur()
    {
        // Mencari data dengan kategori 'Berita'
        $alur = Akademis::where('kategori', 'AlurTA')->first();

        // Pastikan data ditemukan
        if (!$alur) {
            return redirect()->back()->with('error', 'Data dengan kategori Berita tidak ditemukan.');
        }

        // Mengirim data ke view
        return view('alurtugasakhir', compact('alur'));
    }

}
