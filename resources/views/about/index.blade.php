@extends('test')
@include('layout.style')
@include('layout.header')
@section('konten')
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="/index">home</a></li>
                        <li>About Us</li>
                        
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
                    <h2>About Buat.in</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-6 col-md-6 col-sm-8 col-6">
                <div class="single-tranding mb-30">
                
                    <p>"Buat.in adalah layanan pemasaran jasa wedding organizer yang hadir membantu pasangan mengatur acara pernikahan
                    mereka dengan profesional. Kami memahami bahwa mengatur pernikahan adalah hal yang sangat penting dan membutuhkan banyak
                    perhatian dan detil, oleh karena itu kami siap membantu Anda mengatur segala sesuatunya dengan efisien.</p>
                    
                    <p>Tim kami terdiri dari para wedding organizer berpengalaman yang telah membantu banyak pasangan dalam mengatur pernikahan
                    mereka. Kami akan membantu Anda menentukan tema dan konsep pernikahan, mencari vendor yang sesuai dengan budget Anda,
                    dan mengatur jadwal acara untuk hari H. Kami juga akan membantu Anda dalam mengelola budget dan menghindari
                    overspending.</p>               

                    <p>Jika Anda sedang mencari wedding organizer yang dapat membantu Anda mengatur pernikahan impian Anda, maka Buat.in adalah
                    pilihan yang tepat. Hubungi kami sekarang juga untuk memulai proses perencanaan pernikahan Anda."</p>
                    
                </div>

            </div>

        </div>
    </div>
</section>


@include('layout.footer')
@endsection