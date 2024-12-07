@extends('prestasi')

@section('content')
    <div class="container">
        <h1>Daftar Berita</h1>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <a href="{{ route('prestasi.create') }}" class="btn btn-primary">Tambah Berita</a>
        @foreach($prestasi as $item)
            <div class="card mb-3">
                <div class="card-body">
                    <h2><a href="{{ route('prestasi.show', $item->id) }}">{{ $item->title }}</a></h2>
                    <p>{{ Str::limit($item->content, 100) }}</p> <!-- Tampilkan ringkasan konten -->
                    <p><strong>Penulis:</strong> {{ $item->author }}</p>
                    @if($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" alt="Gambar Berita" style="max-width: 200px;">
                    @endif
                    <br>
                    <a href="{{ route('news.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('news.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach

    </div>
@endsection