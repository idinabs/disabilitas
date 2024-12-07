<?php
namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DosenController extends Controller
{
    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|unique:dosens,nip|max:20',
            'jabatan' => 'required|string|max:100',
            'bidang' => 'required|string|max:100',
            'pangkat' => 'required|string|max:50',
            'jenis_jabatan' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        Dosen::create($validatedData);

        return redirect()->route('admin.home');
    }

    public function upload(Request $request)
    {
        $request->validate([
            'upload' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $path = $request->file('upload')->store('images', 'public');

        return response()->json([
            'url' => Storage::url($path),
        ]);
    }

    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, $id)
    {
        // Validate input data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nip' => 'required|string|max:255|unique:dosens,nip,' . $id, // Exclude the current record for uniqueness
            'jabatan' => 'required|string|max:100',
            'bidang' => 'required|string|max:100',
            'pangkat' => 'required|string|max:50',
            'jenis_jabatan' => 'required|string|max:50',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Optional image upload
        ]);

        // Find the Dosen by ID
        $dosen = Dosen::findOrFail($id);

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($dosen->image) {
                Storage::delete('public/' . $dosen->image);
            }

            // Store the new image and get the path
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            // If no new image, keep the old one
            $imagePath = $dosen->image;
        }

        // Update the Dosen record
        $dosen->update([
            'nama' => $validatedData['nama'],
            'nip' => $validatedData['nip'],
            'jabatan' => $validatedData['jabatan'],
            'bidang' => $validatedData['bidang'],
            'pangkat' => $validatedData['pangkat'],
            'jenis_jabatan' => $validatedData['jenis_jabatan'],
            'image' => $imagePath,
        ]);

        // Redirect to the Dosen list page with a success message
        return redirect()->route('admin.home')->with('success', 'Data dosen berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Mencari data akademis berdasarkan ID
        $dosen = Dosen::findOrFail($id);

        // Menghapus file gambar jika ada
        if ($dosen->image) {
            Storage::delete('public/' . $dosen->image);
        }

        // Menghapus file PDF jika ada
        if ($dosen->file_path) {
            Storage::delete('public/' . $dosen->file_path);
        }

        // Menghapus data akademis dari database
        $dosen->delete();

        // Redirect ke halaman utama dengan pesan sukses
        return redirect()->route('admin.home')->with('success', 'Data akademis berhasil dihapus.');
    }


    public function show($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.show', compact('dosen'));
    }
}
