@extends('test')
@include('layout.style')
@include('layout.header')
@section('konten')
<!--product details start-->
    <div class="product_details mt-60 mb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                   <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="assets/img/product/details-1.jpg" data-zoom-image="assets/img/product/details-1.jpg" alt="big-1">
                            </a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                       <form action="#">
                           
                            <h1>Fancy Chair for astron floor</h1>
                        
                            <div class="price_box">
                                <span class="current_price">$70.00</span>
                                <span class="old_price">$80.00</span>
                                
                            </div>
                            <div class="product_desc">
                            
                                <p>eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in </p>
                            </div>
							
                           
                            <div class="product_variant quantity">
                                <button class="button" type="submit"><a href="/checkout">Buat Pesanan</a></button>
                        
                                {{-- <button class="button" type="submit">Buat Pemesanan</button>   --}}
                                
                            </div>
                            
                            
                        </form>
                       

                    </div>
                </div>
            </div>
        </div>    
    </div>
    <!--product details end-->
    
 
    <!--product info end-->
@include('layout.footer')
@endsection