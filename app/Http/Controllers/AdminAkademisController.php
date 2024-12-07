<?php

namespace App\Http\Controllers;

use App\Models\Akademis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminAkademisController extends Controller
{
    public function create()
    {
        return view('akademis.create');
    }

    // Menyimpan data akademis ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string',
            'deskripsi' => 'required|string',
            'content' => 'required|string',
            'kategori' => 'required|string',
            'author' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'pdf' => 'required|mimes:pdf|max:2048',
        ]);

        // Simpan gambar
        $imagePath = $request->hasFile('image') 
            ? $request->file('image')->store('images', 'public') 
            : null;
        // Menyimpan file PDF
        // Menyimpan file PDF
        $pdfFile = $request->file('pdf');
        $pdfPath = $pdfFile->store('pdfs', 'public');  // Simpan file ke folder 'public/pdfs'
        $pdfFileName = $pdfFile->getClientOriginalName();

        // Simpan data ke database
        Akademis::create([
            'title' => $request->title,
            'deskripsi' => $request->deskripsi,
            'content' => $request->content,
            'kategori' => $request->kategori,
            'author' => $request->author,
            'image' => $imagePath,
            'file_name' => $pdfFileName,
            'file_path' => $pdfPath,  // Simpan path yang benar di database
        ]);



        return redirect()->route('admin.home')->with('success', 'Data akademis berhasil disimpan.');
    }

    // Menampilkan data akademis berdasarkan ID
    public function show($id)
    {
        $akademis = Akademis::findOrFail($id);
        return view('akademis.show', compact('akademis'));
    }

    // Mengunggah gambar secara terpisah (misalnya untuk editor konten)
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('images');
        return response()->json(['image_url' => Storage::url($imagePath)], 200);
    }

    public function edit($id)
    {
        // Mengambil data akademis berdasarkan ID
        $akademis = Akademis::findOrFail($id);

        // Menampilkan form edit dengan data akademis yang sudah ada
        return view('akademis.edit', compact('akademis'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string',
            'deskripsi' => 'required|string',
            'content' => 'required|string',
            'kategori' => 'required|string',
            'author' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Gambar bersifat opsional saat update
            'pdf' => 'nullable|mimes:pdf|max:2048', // PDF bersifat opsional saat update
        ]);

        // Mencari data akademis yang ingin diupdate
        $akademis = Akademis::findOrFail($id);

        // Mengupdate kolom lainnya
        $akademis->title = $request->title;
        $akademis->deskripsi = $request->deskripsi;
        $akademis->content = $request->content;
        $akademis->kategori = $request->kategori;
        $akademis->author = $request->author;

        // Jika ada gambar baru yang diupload, simpan gambar baru dan hapus yang lama
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($akademis->image) {
                Storage::delete('public/' . $akademis->image);
            }
            
            // Simpan gambar baru
            $imagePath = $request->file('image')->store('images', 'public');
            $akademis->image = $imagePath;
        }

        // Jika ada file PDF baru yang diupload, simpan file baru dan hapus yang lama
        if ($request->hasFile('pdf')) {
            // Hapus file PDF lama jika ada
            if ($akademis->file_path) {
                Storage::delete('public/' . $akademis->file_path);
            }

            // Simpan file PDF baru
            $pdfFile = $request->file('pdf');
            $pdfFileName = uniqid() . '-' . $pdfFile->getClientOriginalName();  // Nama unik untuk file PDF
            $pdfPath = $pdfFile->storeAs('pdfs', $pdfFileName, 'public');
            $akademis->file_name = $pdfFileName;
            $akademis->file_path = $pdfPath;
        }

        // Simpan perubahan ke database
        $akademis->save();

        // Redirect ke halaman utama dengan pesan sukses
        return redirect()->route('admin.home')->with('success', 'Data akademis berhasil diupdate.');
    }
    public function destroy($id)
    {
        // Mencari data akademis berdasarkan ID
        $akademis = Akademis::findOrFail($id);

        // Menghapus file gambar jika ada
        if ($akademis->image) {
            Storage::delete('public/' . $akademis->image);
        }

        // Menghapus file PDF jika ada
        if ($akademis->file_path) {
            Storage::delete('public/' . $akademis->file_path);
        }

        // Menghapus data akademis dari database
        $akademis->delete();

        // Redirect ke halaman utama dengan pesan sukses
        return redirect()->route('admin.home')->with('success', 'Data akademis berhasil dihapus.');
    }

}
