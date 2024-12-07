<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Prestasi;
use App\Models\Dosen;
use App\Models\Mitra;
use App\Models\Akademis;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $news = News::latest()->take(5)->get(); 
        $prestasi = Prestasi::latest()->take(5)->get(); 
        $dosen = Dosen::latest()->take(5)->get(); 
        $mitra = Mitra::latest()->take(5)->get(); 
        $akademis = Akademis::latest()->take(5)->get(); 
        return view('admin.home', compact('news', 'prestasi', 'dosen', 'mitra', 'akademis'));
    }
}
