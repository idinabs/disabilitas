@extends('layout')

@section('content')
    <div class="container">
        <h1>{{ $news->title }}</h1>
        <p><strong>Penulis:</strong> {{ $news->author }}</p>
        <p>{{ $news->content }}</p>
        @if($news->image)
            <img src="{{ asset('storage/' . $news->image) }}" alt="Gambar Berita" class="img-fluid">
        @endif
        <br>
        <a href="{{ route('news.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection
