<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'content' => 'required|string',
            'kategori' => 'required|string',
            'author' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Ganti imageSampul ke image
        ]);

        // Upload gambar jika ada
        $imagePath = $request->hasFile('image') 
            ? $request->file('image')->store('images', 'public') 
            : null;

        // Membuat instance baru dari model News
        $news = new News();
        $news->title = $request->title;
        $news->deskripsi = $request->deskripsi;
        $news->content = $request->content;
        $news->kategori = $request->kategori;
        $news->author = $request->author;
        $news->image = $imagePath; // Menetapkan path gambar ke kolom image

        // Menyimpan berita ke database
        $news->save();

        return redirect()->route('admin.home');

    }

    public function upload(Request $request)
    {
        // Validasi untuk meng-upload gambar di CKEditor
        $request->validate([
            'upload' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', // Ganti imageSampul ke image
        ]);

        // Simpan gambar dan ambil path
        $path = $request->file('upload')->store('images', 'public');

        return response()->json([
            'url' => Storage::url($path),
        ]);
    }

    public function show($id)
    {
        // Ambil berita berdasarkan ID
        $news = News::findOrFail($id);
        $berita = News::latest()->take(6)->get(); 

        // Kirim data berita ke view
        return view('news.show', compact('news', 'berita'));
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Ambil data berita yang akan diupdate
        $news = News::findOrFail($id);

        // Handle file upload jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = $news->image; // Jika tidak ada gambar baru, tetap pakai gambar lama
        }

        // Update data berita
        $news->title = $request->title;
        $news->deskripsi = $request->deskripsi;
        $news->content = $request->content;
        $news->author = $request->author;
        $news->kategori = $request->kategori;
        $news->image = $imagePath; // Update gambar jika ada perubahan
        $news->save();

        // Redirect ke halaman yang sesuai
        return redirect()->route('admin.home', $news->id)->with('success', 'Berita berhasil diupdate');
    }


    public function destroy($id)
    {
        // Temukan berita berdasarkan ID
        $news = News::findOrFail($id);
    
        // Hapus gambar jika ada
        if ($news->image) {
            Storage::delete('public/' . $news->image);
        }
    
        // Hapus berita
        $news->delete();
    
        // Redirect ke halaman dengan pesan sukses
        return redirect()->route('admin.home')->with('success', 'Berita berhasil dihapus');
    }
    
    public function search(Request $request)
    {
        $query = $request->input('query');

        $news = News::where('title', 'LIKE', "%{$query}%")
                    ->orWhere('content', 'LIKE', "%{$query}%")
                    ->latest()
                    ->paginate(10);

        $dosen = Dosen::where('nama', 'LIKE', "%{$query}%")
                    ->orWhere('nip', 'LIKE', "%{$query}%")
                    ->latest()
                    ->paginate(10);

        $mahasiswa = News::latest()->take(5)->get(); 

    
        return view('search.result', compact('news', 'dosen', 'query', 'mahasiswa'));
    }

}
