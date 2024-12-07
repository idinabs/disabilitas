<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Prestasi;
use App\Models\Akademis;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::latest()->take(3)->where('kategori', 'Berita')->get(); 
        $prestasi = News::latest()->take(5)->where('kategori', 'Prestasi')->get(); 
        $akademis = Akademis::latest()->take(5)->where('kategori', 'InfromasiAkademik')->get(); 
        return view('homeLayout.contentHome', compact('news', 'prestasi', 'akademis'));
    
    }
}
