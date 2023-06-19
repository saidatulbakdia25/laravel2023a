@extends('layout.main')

@section('content')
<h3>DAFTAR NOVEL</h3>
<div class="card">
    <div class="card-body">
        The more that you read, the more things you will know. The more that you learn, the more places you’ll go. - Dr. Seuss. 
    </div>
  </div>
  <div class="mt-3">
    <button type="button" class="btn btn-sm btn-primary" onclick="window.location='{{ url('novels/add') }}'" >
        <i class="fas fa-plus-circle"></i>Tambah Data
    </button>
  </div>
  <div class="mt-3">
    @if (session('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil</strong> {{ session('msg') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
   @endif
    <table class="table table-sm table-stripped table-bordered">
        <thead>
            <tr>
                <th>ID Novel</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Halaman</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($novels as $row)
            <tr>
                <td>{{ $row->idnovels }}</td>
                <td>{{ $row->judul }}</td>
                <td>{{ $row->penulis }}</td>
                <td>{{ $row->halaman }}</td>
                <td>{{ $row->stok }}</td>
                <td>
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('novels.destroy', $row->idnovels) }}" method="POST">
                    <button onclick="window.location='{{ url('novels/'.$row->idnovels) }}'" type="button" class="btn btn-sm btn-warning" title="Edit Data">
                        <i class="fas fa-edit"></i>Edit
                    </button>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">
                        Delete
                    </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    
    </table>
  </div>
@endsection