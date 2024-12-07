<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;

class MitraController extends Controller
{
    public function create()
    {
        return view('mitra.create');
    }

    public function store(Request $request)
    {
        // Validate input
        $validatedData = $request->validate([
            'instansi' => 'required|string|max:255',
            'alamat' => 'required|string|max:500', // Adjust the max length as needed
        ]);

        // Create a new Mitra record
        Mitra::create($validatedData);

        // Redirect with a success message
        return redirect()->route('admin.home')->with('success', 'Data mitra berhasil disimpan.');
    }

    public function show($id)
    {
        // Dapatkan data Mitra berdasarkan ID
        $mitra = Mitra::findOrFail($id);

        // Tampilkan data ke view
        return view('mitra.show', compact('mitra'));
    }

    public function edit($id)
    {
        // Dapatkan data Mitra untuk diedit
        $mitra = Mitra::findOrFail($id);

        // Tampilkan form edit dengan data mitra
        return view('mitra.edit', compact('mitra'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'instansi' => 'required|string|max:255',
            'alamat' => 'required|string|max:500', // Use max length consistent with your migration
        ]);

        // Dapatkan data Mitra dan update
        $mitra = Mitra::findOrFail($id);
        $mitra->update($validatedData);

        return redirect()->route('admin.home')->with('success', 'Data mitra berhasil diperbarui.');
    }


    public function rincian()
    {
        $mitra = Mitra::oldest()->get(); 
        return view('listmitra', compact('mitra'));
    
    }

    public function destroy($id)
    {
        // Hapus data Mitra berdasarkan ID
        $mitra = Mitra::findOrFail($id);
        $mitra->delete();

        return redirect()->route('admin.home')->with('success', 'Data mitra berhasil dihapus.');
    }
}
