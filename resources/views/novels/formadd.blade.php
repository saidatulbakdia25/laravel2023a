@extends('layout.main')

@section('content')
<h3>FORM NEW DATA NOVEL</h3>
<div class="card">
    <div class="card-header">
        <button type="button" class="btn btn-sm btn-danger" onclick="window.location='{{ url('novels') }}'" >
            <i class="fas fa-plus-circle"></i>kembali
        </button>
    </div>
  <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="POST" action="{{ url('novels') }}">
        @csrf
        <div class="row mb-3">
            <label for="txtidnovels" class="col-sm-2 col-form-label">Id Novel</label>
            <div class="col-100">
              <input type="text" class="form-control-sm" id="txtidnovels" name="txtidnovels">
        </div>
        <div class="row mb-3">
                <label for="txtjudul" class="col-sm-2 col-form-label">JUDUL</label>
                <div class="col-100">
                  <input type="text" class="form-control-sm" id="txtjudul" name="txtjudul">
        </div>
        <div class="row mb-3">
            <label for="txtpenulis" class="col-sm-2 col-form-label">PENULIS</label>
            <div class="col-100">
                 <input type="text" class="form-control-sm" id="txtpenulis" name="txtpenulis">
        </div>
        <div class="row mb-3">
            <label for="txthalaman" class="col-sm-2 col-form-label">HALAMAN</label>
            <div class="col-100">
              <input type="text" class="form-control-sm" id="txthalaman" name="txthalaman">
        </div>
        <div class="row mb-3">
            <label for="txtstok" class="col-sm-2 col-form-label">STOK</label>
            <div class="col-100">
              <input type="text" class="form-control-sm" id="txtstok" name="txtstok">
        </div>
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-100">
              <button type="submit" class="btn btn-sm btn-success">SIMPAN</button>
        </div>
    </div>
    </form>
</div>
</div>
    
@endsection