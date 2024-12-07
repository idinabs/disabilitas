@extends('berita')

@section('title', 'Edit Post')

@section('content')
    <div class="container">
        <h1>Edit Post</h1>

        <!-- Display validation errors if any -->
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Ensure this method is PUT for updating -->

            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $news->title) }}" required>
            </div>

            <div class="form-group">
                <label for="deskripsi">Deskripsi Singkat</label>
                <input type="text" name="deskripsi" class="form-control" value="{{ old('deskripsi', $news->deskripsi) }}" required>
            </div>

            <div class="form-group">
                <label for="content">Konten</label>
                <textarea id="editor" name="content" class="form-control" required>{{ old('content', $news->content) }}</textarea>
            </div>

            <div class="form-group">
                <label for="author">Penulis</label>
                <input type="text" name="author" class="form-control" value="{{ old('author', $news->author) }}" required>
            </div>

            <div class="form-group">
                <select class="form-select form-control" name="kategori">
                    <option value="Berita" {{ old('kategori', $news->kategori) == 'Berita' ? 'selected' : '' }}>Berita Biasa</option>
                    <option value="Prestasi" {{ old('kategori', $news->kategori) == 'Prestasi' ? 'selected' : '' }}>Prestasi</option>
                    <option value="UKM" {{ old('kategori', $news->kategori) == 'UKM' ? 'selected' : '' }}>Kegiatan Mahasiswa</option>
                </select>
            </div>

            <div class="form-group">
                <label for="image">Gambar Sampul</label>
                @if($news->image)
                    <img src="{{ asset('storage/' . $news->image) }}" alt="Gambar Sampul" style="max-width: 200px;">
                @endif
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection

<script>
    CKEDITOR.replace('editor', {
        filebrowserUploadUrl: "{{ route('admin.news.upload.image') }}", // Set the correct upload URL here
        filebrowserUploadMethod: 'form'
    });
</script>
