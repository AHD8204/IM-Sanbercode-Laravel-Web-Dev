@extends('backend')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Detail Data Pemain Film</h3>
        </div>
        <!-- /.card-header -->

        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td><strong>Nama</strong></td>
                        <td>{{ $cast->nama }}</td>
                    </tr>
                    <tr>
                        <td><strong>Umur</strong></td>
                        <td>{{ $cast->umur }}</td>
                    </tr>
                    <tr>
                        <td><strong>Bio</strong></td>
                        <td>{{ $cast->bio }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <a href="{{ url('/cast') }}" class="btn btn-primary">Kembali ke List Data Pemain Film</a>
        </div>
        <!-- /.card-footer -->
    </div>
@endsection
