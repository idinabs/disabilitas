@extends('dosen')

@section('title', 'Buat Profil Baru')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Buat Profil Baru</h1>

        {{-- Menampilkan pesan sukses jika ada --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Menampilkan pesan error validasi --}}
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.dosen.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="nip">NIP</label>
                <input type="text" name="nip" id="nip" class="form-control" value="{{ old('nip') }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="jabatan">Jabatan</label>
                <select class="form-select form-control" id="jabatan" name="jabatan" required>
                    <option disabled selected>Pilih Jabatan</option>
                    <option value="Pejabat-Prodi" {{ old('jabatan') == 'Pejabat-Prodi' ? 'selected' : '' }}>Pejabat-Prodi</option>
                    <option value="Dosen" {{ old('jabatan') == 'Dosen' ? 'selected' : '' }}>Dosen</option>
                    <option value="Tidak" {{ old('jabatan') == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="bidang">Bidang</label>
                <input type="text" name="bidang" id="bidang" class="form-control" value="{{ old('bidang') }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="pangkat">Pangkat</label>
                <input type="text" name="pangkat" id="pangkat" class="form-control" value="{{ old('pangkat') }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="jenis_jabatan">Jenis Jabatan</label>
                <input type="text" name="jenis_jabatan" id="jenis_jabatan" class="form-control" value="{{ old('jenis_jabatan') }}" required>
            </div>
            <div class="form-group mb-4">
                <label for="image">Gambar Profil</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
