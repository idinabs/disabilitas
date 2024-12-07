@extends('mitra')

@section('content')
    <div class="container">
        <h1>Tambah Mitra Baru</h1>

        <form action="{{ route('admin.mitra.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="instansi">Instansi</label>
                <input type="text" name="instansi" class="form-control" required>
                @error('instansi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" required>
                @error('alamat')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
