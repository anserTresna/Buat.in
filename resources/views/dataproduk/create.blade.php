@extends('layoutseller.main')
@section('content')
@section("component_css")

<link src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

@endsection
<h2>Form Product</h2>
<form method="POST" action="/seller/product/store" enctype="multipart/form-data">
    {{ csrf_field() }}   
   
    <div class="mb-3">
        <label class="form-label">NAMA</label>
        <input type="text" name="nama" id="nama" class="form-control" autofocus required>
    </div>
    <div class="mb-3">
        <label class="form-label">HARGA</label>
        <input type="text" name="harga" id="harga" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">DETAIL</label>
        <input type="text" name="detail" id="detail" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">GAMBAR</label>
        <div class="form-text">
            Format jpg, png, jpeg | Max 2MB
        </div>
        <input type="file" name="gambar"  id="gambar" class="form-control" required onchange="previewImage()">
    </div>
    <a href="/seller/product" class="btn btn-secondary">KEMBALI</a>
    <button type="submit" class="Btn btn-primary">SIMPAN</button>
</form>
@endsection

@section("component_js")
    
<script>
    function previewImage() {
        const image = document.querySelector("#gambar");
        const imgPreview = document.querySelector(".gambar-preview");
        imgPreview.style.display = "block";
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
            $("#tampilGambar").addClass('mb-3');
            $("#tampilGambar").width("640px");
            $("#tampilGambar").height("640px");
        }
    }
</script>
@endsection