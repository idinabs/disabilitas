@extends('mitra')

@section('content')
    <div class="container">
        <h1>Edit Mitra</h1>

        <form action="{{ route('admin.mitra.update', $mitra->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Ensure this method is PUT for updating -->

            <div class="form-group mb-3">
                <label for="instansi">Instansi</label>
                <input type="text" name="instansi" id="instansi" class="form-control" value="{{ old('instansi', $mitra->instansi) }}" required>
            </div>

            <div class="form-group mb-3">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ old('alamat', $mitra->alamat) }}" required>
            </div>

            
           
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
