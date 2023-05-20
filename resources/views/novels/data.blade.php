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
    <table class="table table-sm table-stripped table-bordered">
        <thead>
            <tr>
                <th>ID Novel</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Halaman</th>
                <th>Stok</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($novels as $row)
            <tr>
                <th>{{ $row->idnovels }}</th>
                <th>{{ $row->judul }}</th>
                <th>{{ $row->penulis }}</th>
                <th>{{ $row->halaman }}</th>
                <th>{{ $row->stok }}</th>

            </tr>
                
            @endforeach
        </tbody>
    
    </table>
  </div>
  
@endsection