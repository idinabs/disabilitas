@extends('prestasi')

@section('content')
    <div class="container">
        <h1>Edit Prestasi</h1>

        <form action="{{ route('prestasi.update', $prestasi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" class="form-control" value="{{ $prestasi->title }}" required>
            </div>
            <div class="form-group">
                <label for="content">Konten</label>
                <textarea name="content" class="form-control" required>{{ $prestasi->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="author">Penulis</label>
                <input type="text" name="author" class="form-control" value="{{ $prestasi->author }}" required>
            </div>
            <div class="form-group">
                <label for="image">Gambar</label>
                @if($prestasi->image)
                    <img src="{{ asset('storage/' . $prestasi->image) }}" alt="Gambar Berita" style="max-width: 200px;">
                @endif
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>
           
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
