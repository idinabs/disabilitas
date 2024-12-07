@extends('berita')

@section('title', 'Buat Post Baru')

@section('content')
    <div class="container">
        <h1>Buat Post Baru</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('admin.akademisadmin.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Singkat</label>
                <input type="text" name="deskripsi" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="content">Konten</label>
                <textarea id="editor" name="content" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="author">Penulis</label>
                <input type="text" name="author" class="form-control" required>
            </div>
            <div class="form-group">
                <select class="form-select form-control" aria-label="Default select example" name="kategori">
                    <option value="Panduan">Panduan</option>
                    <option value="AlurTA">Alur Tugas Akhir</option>
                    <option value="InfromasiAkademik">Informasi Akademik</option>
                </select>
            </div>
            <div class="form-group">
                <label for="image">Gambar Sampul</label>
                <input type="file" name="image" class="form-control" accept="image/*"> <!-- Ganti imageSampul ke image -->
            </div>
            <div class="form-group">
                <label for="pdf">Upload PDF:</label>
                <input type="file" name="pdf" accept="application/pdf" required><br>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </div>
@endsection
<script>
        CKEDITOR.replace('editor', {
            filebrowserUploadUrl: "",
            filebrowserUploadMethod: 'form'
        });
</script>