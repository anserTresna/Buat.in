@extends('layoutseller.main')
@section('content')
<h2>Update Product</h2>
<form method="POST" action="/seller/product/update/{{ $dataProduct->id}}">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $dataProduct->id }}">
    <div class="mb-3">
        <label class="form-label">NAMA</label>
        <input type="text" name="nama" class="form-control" value="{{ $dataProduct->nama }}" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">HARGA</label>
        <input type="text" name="harga" class="form-control" value="{{ $dataProduct->harga}}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">DETAIL</label>
        <input type="text" name="text" class="form-control" value="{{ $dataProduct->detail}}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">GAMBAR</label>
        <div class="form-text">
           Format jpg, png, jpeg | Max 2MB
        </div>
        <input type="file" name="gambar" id="gambar" class="form-control" value="{{ $dataProduct->gambar}}" required>
    </div>
    <a href="/seller/product" class="btn btn-secondary">KEMBALI</a>
    <button type="submit" class="Btn btn-primary">SIMPAN</button>
</form>
@endsection