@extends('layoutseller.main')
@section('content')
<h2>Update Product</h2>
<form method="POST" action="/dataproduk/update/{{ $dataProducts->id}}">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $dataProducts->id }}">
    <div class="mb-3">
        <label class="form-label">NAMA</label>
        <input type="text" name="nama" class="form-control" value="{{ $dataProducts->id }}" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">HARGA</label>
        <input type="text" name="harga" class="form-control" value="{{ $dataProducts->id}}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">DETAIL</label>
        <input type="text" name="text" class="form-control" value="{{ $dataProducts->id}}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">GAMBAR</label>
        <input type="file" name="gambar" id="gambar" class="form-control" value="{{ $dataProducts->id}}" required>
    </div>
    <a href="/dataproduk" class="btn btn-secondary">KEMBALI</a>
    <button type="submit" class="Btn btn-primary">SIMPAN</button>
</form>
@endsection