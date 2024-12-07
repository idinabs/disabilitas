<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('visimisi');
    }

    public function team()
    {
        $strukturalMembers = Dosen::where('jabatan', 'Pejabat-Prodi')->get(); // Only get members with 'Pejabat' jabatan
        return view('struktural', compact('strukturalMembers'));
        
       
    }

    public function dosen()
    {
        $dosen = Dosen::oldest()->get(); 
        return view('pengajar', compact('dosen'));
    
    }

    public function pimpinan()
    {
        $pimpinan = Dosen::oldest()->get(); 
        return view('pimpinan', compact('pimpinan'));
    
    }

}
