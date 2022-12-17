@extends('layoutseller.main')
@section('content')
<h2>Form Product</h2>
<form method="POST" action="/dataproduk/store" enctype="multipart/form-data">
    {{ csrf_field() }}   
    <div class="mb-3">
        <label class="form-label">NAMA</label>
        <input type="text" name="nama" id="nama" class="form-control" autofocus required>
    </div>
    <div class="mb-3">
        <label class="form-label">HARGA</label>
        <input type="number" name="harga" id="harga" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">DETAIL</label>
        <input type="text" name="detail" id="detail" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">GAMBAR</label>
        <input type="file" name="gambar"  id="gambar" class="form-control" required>
    </div>
    <a href="/dataproduk" class="btn btn-secondary">KEMBALI</a>
    <button type="submit" class="Btn btn-primary">SIMPAN</button>
</form>
@endsection