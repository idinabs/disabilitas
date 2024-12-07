<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;


class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = News::latest()->take(3)->where('kategori', 'UKM')->get(); 
        $beritabaru = News::latest()->take(6)->where('kategori', 'Berita')->get(); 

        return view('mahasiswa', compact('mahasiswa', 'beritabaru'));
    
    }
}
