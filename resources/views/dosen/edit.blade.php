
@extends('berita')

@section('content')
    <div class="container">
        <h1>Edit Dosen</h1>

        <form action="{{ route('admin.dosen.update', $dosen->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Ensure this method is PUT for updating -->

            <div class="form-group mb-3">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $dosen->nama) }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="nip">NIP</label>
                <input type="text" name="nip" id="nip" class="form-control" value="{{ old('nip', $dosen->nip) }}" required>
            </div>

            <div class="form-group">
                <select class="form-select form-control" name="jabatan">
                    <option value="Pejabat" {{ old('jabatan', $dosen->jabatan) == 'Pejabat' ? 'selected' : '' }}>Pejabat</option>
                    <option value="Dosen" {{ old('jabatan', $dosen->jabatan) == 'Dosen' ? 'selected' : '' }}>Dosen</option>
                    <option value="Tidak" {{ old('jabatan', $dosen->kategori) == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="bidang">Bidang</label>
                <input type="text" name="bidang" id="bidang" class="form-control" value="{{ old('bidang', $dosen->bidang) }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="pangkat">Pangkat</label>
                <input type="text" name="pangkat" id="pangkat" class="form-control" value="{{ old('pangkat', $dosen->pangkat) }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="jenis_jabatan">Jenis Jabatan</label>
                <input type="text" name="jenis_jabatan" id="jenis_jabatan" class="form-control" value="{{ old('jenis_jabatan', $dosen->jenis_jabatan) }}" required>
            </div>
            <div class="form-group">
                <label for="image">Gambar</label>
                @if($dosen->image)
                    <img src="{{ asset('storage/' . $dosen->image) }}" alt="Gambar Berita" style="max-width: 200px;">
                @endif
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>
           
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
<script>
    CKEDITOR.replace('editor', {
        filebrowserUploadUrl: "{{ route('admin.dosen.upload.image') }}", // Set the correct upload URL here
        filebrowserUploadMethod: 'form'
    });
</script>
