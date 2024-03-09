@extends('backend')

@section('content')
        <div class="card" style="width: 100%">
            <div class="card-header">
                <h3 class="card-title">List Data Pemain Film</h3>
            </div>
            <!-- /.card-header -->

            <div class="card-body p-0">
                <table class="table table-lg">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Bio</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($casts as $index => $cast)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $cast->nama }}</td>
                                <td>{{ $cast->umur }}</td>
                                <td>{{ $cast->bio }}</td>
                                <td>
                                    <a href="{{ url('/cast/'.$cast->id) }}" class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{ url('/cast/'.$cast->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ url('/cast/'.$cast->id) }}" method="post" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <a href="{{ url('/cast/create') }}" class="btn btn-success">Tambah Data Pemain Film Baru</a>
            </div>
            <!-- /.card-footer -->
        </div>
@endsection
