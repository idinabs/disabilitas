<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasi = Prestasi::all();
        return view('prestasi.index', compact('prestasi'));
    }

    public function create()
    {
        return view('prestasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Upload gambar jika ada
        $imagePath = $request->hasFile('image') 
            ? $request->file('image')->store('images', 'public') 
            : null;

        // Simpan berita dengan path gambar
        Prestasi::create([
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
            'image' => $imagePath,
        ]);

        return redirect()->route('prestasi.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.edit', compact('prestasi'));
    }

    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.show', compact('prestasi'));
    }

    public function update(Request $request, $id)
    {
        $prestasi = Prestasi::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'author' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Jika ada gambar baru yang diupload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($prestasi->image) {
                Storage::delete('public/' . $prestasi->image);
            }

            // Upload gambar baru
            $prestasi->image = $request->file('image')->store('images', 'public');
        }

        // Update data berita tanpa mengubah field gambar jika tidak ada gambar baru
        $prestasi->update([
            'title' => $request->title,
            'content' => $request->content,
            'author' => $request->author,
        ]);

        return redirect()->route('prestasi.index')->with('success', 'Berita berhasil diupdate.');
    }

    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        // Hapus gambar jika ada
        if ($prestasi->image) {
            Storage::delete('public/' . $prestasi->image);
        }

        // Hapus berita
        $prestasi->delete();

        return redirect()->route('prestasi.index')->with('success', 'Berita berhasil dihapus.');
    }
}
