@extends('berita')

@section('content')
    <h1>Edit Data Akademis</h1>

    <form action="{{ route('admin.akademisadmin.update', $akademis->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $akademis->title) }}" required>
        </div>

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required>{{ old('deskripsi', $akademis->deskripsi) }}</textarea>
        </div>

        <div class="form-group">
                <label for="content">Konten</label>
                <textarea id="editor" name="content" class="form-control" required>{{ old('content', $akademis->content) }}</textarea>
        </div>

        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" class="form-control" value="{{ old('kategori', $akademis->kategori) }}" required>
        </div>

        <div class="form-group">
            <label for="author">Penulis</label>
            <input type="text" name="author" class="form-control" value="{{ old('author', $akademis->author) }}">
        </div>

        <div class="form-group">
            <label for="image">Gambar</label>
            <input type="file" name="image" class="form-control">
            @if ($akademis->image)
                <img src="{{ Storage::url($akademis->image) }}" alt="Current Image" class="mt-2" width="150">
            @endif
        </div>

        <div class="form-group">
            <label for="pdf">File PDF</label>
            <input type="file" name="pdf" class="form-control">
            @if ($akademis->file_path)
                <a href="{{ Storage::url($akademis->file_path) }}" target="_blank">Lihat PDF Saat Ini</a>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
<script>
    CKEDITOR.replace('editor', {
        filebrowserUploadUrl: "{{ route('admin.dosen.upload.image') }}", // Set the correct upload URL here
        filebrowserUploadMethod: 'form'
    });
</script>
