@extends('backend')

@section('content')
    <div class="card col-12">
        <div class="card-header">
            <h3 class="card-title">Form Edit Data Pemain Film</h3>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
            <form action="{{ url('/cast/'.$cast->id) }}" method="post">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" name="nama" value="{{ $cast->nama }}" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="umur">Umur:</label>
                    <input type="number" name="umur" value="{{ $cast->umur }}" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label for="bio">Bio:</label>
                    <textarea name="bio" class="form-control" rows="8" required>{{ $cast->bio }}</textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
