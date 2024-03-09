
    @extends('backend')

    @section('content')
        <div class="card card-primary col-12" >
            <div class="card-header">
                <h3 class="card-title">Form Tambah Data Pemain Film</h3>
            </div>  
            <form action="{{ url('/cast') }}" method="post" class="card">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur:</label>
                        <input type="number" class="form-control" name="umur" required>
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio:</label>
                        <textarea class="form-control" name="bio" required></textarea>
                    </div>
                </div>
                <!-- /.card-body -->
            
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            
         </div>
         <a href="{{ url('/cast') }}" class="btn btn-primary" style="text-decoration: none; color: #fff;">Kembali ke List Data Pemain Film</a>
    @endsection
