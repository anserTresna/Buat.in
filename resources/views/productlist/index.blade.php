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
                        <li><a href="/index">home</a></li>
                        <li>Product details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--Other product-->

<section class="pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section-title">
                    <h2>Our List Product</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
    @foreach  ($dataProduct as $item )
        
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="single-tranding mb-30">
                    <a href="/productdetails">
                        <div class="tranding-pro-img">
                            <img src="{{ url('/storage/'.$item->gambar) }}" alt="image" width="100px">
                        </div>
                        <div class="tranding-pro-title">
                            <h3>{{ $item->nama }}</h3>
                            <h4>{{ $item->harga }}</h4>
                        </div>
                    </a>
                </div>
            </div>
        
        @endforeach 
        </div>
        </div>
        
</section>

<!--Other product-->

@include('layout.footer')
@endsection