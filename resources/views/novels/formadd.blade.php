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
    <form method="POST" action="{{ url('novels') }}">
        @csrf
        <div class="row mb-3">
            <label for="txtidnovels" class="col-sm-2 col-form-label">Id Novel</label>
            <div class="col-100">
              <input type="text" class="form-control form-control-sm @error('txtidnovels') is-invalid @enderror" id="txtidnovels" name="txtidnovels" value="{{ old('txtidnovels') }}">
              @error('txtidnovels')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
        </div>
        <div class="row mb-3">
                <label for="txtjudul" class="col-sm-3 col-form-label">JUDUL</label>
                <div class="col-100">
                  <input type="text" class="form-control form-control-sm @error('txtjudul') is-invalid @enderror" id="txtjudul" name="txtjudul" value="{{ old('txtjudul') }}">
                  @error('txtjudul')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
        </div>
        <div class="row mb-3">
            <label for="txtpenulis" class="col-sm-2 col-form-label">PENULIS</label>
            <div class="col-100">
                 <input type="text" class="form-control form-control-sm @error('txtpenulis') is-invalid @enderror" id="txtpenulis" name="txtpenulis" value="{{ old('txtpenulis') }}">
                 @error('txtpenulis')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
        </div>
        <div class="row mb-3">
            <label for="txthalaman" class="col-sm-2 col-form-label">HALAMAN</label>
            <div class="col-100">
              <input type="text" class="form-control form-control-sm @error('txthalaman') is-invalid @enderror" id="txthalaman" name="txthalaman" value="{{ old('txthalaman') }}">
              @error('txthalaman')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
        </div>
        <div class="row mb-3">
            <label for="txtstok" class="col-sm-2 col-form-label">STOK</label>
            <div class="col-100">
              <input type="text" class="form-control form-control-sm @error('txtstok') is-invalid @enderror" id="txtstok" name="txtstok" value="{{ old('txtstok') }}">
              @error('txtstok')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
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