@extends('test')
@include('layout.style')
@include('layout.header')
@section('konten')
<!--slider area start-->
<section class="slider_section d-flex align-items-center" data-bgimg="assets/img/slider/slider3.jpg">
    <div class="slider_area owl-carousel">
        <div class="single_slider d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <h1>Welcome To Buat.in</h1>
                            <h2>Your Planning Friend</h2>
                            <a class="button" href="/productlist">Buy now</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <img src="assets/img/product/home1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="single_slider d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <h1>Best Planning For Wedding</h1>
                            <h2>This Buat.in</h2>
                            <a class="button" href="/productlist">Shop now</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <img src="assets/img/product/home2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single_slider d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <h1>With Buat.in</h1>
                            <h2>Special on Your Wedding</h2>
                            <a class="button" href="/productlist">shopping now</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_content">
                            <img src="assets/img/product/home3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--slider area end-->

<!--Tranding product-->
<section class="pt-60 pb-30 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="section-title">
                    <h2>Tranding Products</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="single-tranding">
                    <a href="/product">
                        <div class="tranding-pro-img">
                            <img src="assets/img/product/tranding-1.jpg" alt="">
                        </div>
                        <div class="tranding-pro-title">
                            <h3>Meyoji Robast Drone</h3>
                            <h4>Drone</h4>
                        </div>
                        <div class="tranding-pro-price">
                            <div class="price_box">
                                <span class="current_price">$70.00</span>
                                <span class="old_price">$80.00</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="single-tranding">
                    <a href="http://127.0.0.1:8000/product">
                        <div class="tranding-pro-img">
                            <img src="assets/img/product/tranding-2.jpg" alt="">
                        </div>
                        <div class="tranding-pro-title">
                            <h3>Ut praesentium earum</h3>
                            <h4>Mevrik</h4>
                        </div>
                        <div class="tranding-pro-price">
                            <div class="price_box">
                                <span class="current_price">$70.00</span>
                                <span class="old_price">$80.00</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="single-tranding">
                    <a href="/product">
                        <div class="tranding-pro-img">
                            <img src="assets/img/product/tranding-3.jpg" alt="">
                        </div>
                        <div class="tranding-pro-title">
                            <h3>Consectetur adipisicing</h3>
                            <h4>Flyer</h4>
                        </div>
                        <div class="tranding-pro-price">
                            <div class="price_box">
                                <span class="current_price">$70.00</span>
                                <span class="old_price">$80.00</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Tranding product-->
@include('layout.footer')
@endsection
