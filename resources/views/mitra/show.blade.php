@extends('prestasi')

@section('content')
    <div class="container">
        <h1>{{ $prestasi->title }}</h1>
        <p><strong>Penulis:</strong> {{ $prestasi->author }}</p>
        <p>{{ $prestasi->content }}</p>
        @if($prestasi->image)
            <img src="{{ asset('storage/' . $prestasi->image) }}" alt="Gambar Berita" class="img-fluid">
        @endif
        <br>
        <a href="{{ route('prestasi.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection
