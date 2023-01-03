@extends('test')
@include('layout.style')
@include('layout.header')
@section("component_css")

<link src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

@endsection
@section('konten')

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="dashboard">home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->
    <!--Checkout page section-->
    <div class="Checkout_section mt-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                </div>
            </div>
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3>PEMESANAN</h3>
                        <form action="/checkout" enctype="multipart/form-data" method="post">
                            
                            
                                @csrf
                                    <div class="mb-3">
                                        <label class="nama">NAMA</label>
                                        <input type="text" name="nama" id="nama" class="form-control" autofocus required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="alamat">ALAMAT</label>
                                        <input type="text" name="alamat" id="alamat" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="tanggal">TANGGAL BOOKING</label>
                                        <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="gambar">UPLOAD BUKTI PEMBAYARAN</label>
                                        <img class="gambar-preview img fluid mb-3 col sm-2" alt="" >
                                        <input type="file" name="gambar"  id="gambar" class="form-control" required onchange="previewImage()">
                                    </div>
                                    <div>
                                    <label class="form-label">PAKET</label>
                                    <select name="paket" id="paket" class="form-control" required>
                                        <option value="Paket">Paket</option>
                                        <option value="Akad Only">Akad Only</option>
                                        <option value="Rumahan Me & You">Rumahan Me & You</option>
                                        <option value="Rumahan Silver">Rumahan Silver</option>
                                        <option value="Rumahan Gold">Rumahan Gold</option>
                                        <option value="Rumahan Platinum">Rumahan Platinum</option>
                                        <option value="Gedung Platinum">Gedung Platinum</option>
                                        <option value="Gedung Ultimate">Gedung Ultimate</option>
                                        <option value="Gedung Eksklusif">Gedung Eksklusif</option>
                                    </select>
                                    </div>
                                    <div class="order-notes mt-3">
                                    <label for="order_notes">Order Notes</label>
                                    <textarea name="order_notes" id="order_notes" rows="2"
                                        placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                    <button type="submit" class="Btn btn-primary">SIMPAN</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
@include('layout.footer')
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
            $("#tampilGambar").width("100%");
            $("#tampilGambar").height("300");
        }
    }
</script>

@endsection