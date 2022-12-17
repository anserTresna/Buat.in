@extends('test')
@include('layout.style')
@include('layout.header')
@section('konten')
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="/index">home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="account">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="account-contents"
                    style="background: url('assets/img/about/about2.jpg'); background-size: cover;">
                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                            <div class="account-thumb">
                                <h2>Contact us</h2>
                                <p>"Terima kasih telah mengunjungi halaman hubungi kami Buat.in. Jika Anda memiliki pertanyaan atau kebutuhan bantuan
                                selama proses perencanaan pernikahan, kami siap membantu Anda.                                
                                Anda dapat menghubungi kami melalui formulir di bawah ini</p>
                                <p>Kami akan segera menanggapi permintaan Anda sesegera mungkin.</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                            <div class="account-content">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-acc-field">
                                                <label for="name">Name</label>
                                                <input type="text" placeholder="Name" id="name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-acc-field">
                                                <label for="email">Email</label>
                                                <input type="email" placeholder="Email" id="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="single-acc-field">
                                                <label for="msg">Message</label>
                                                <textarea name="msg" id="msg" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="single-acc-field boxes">
                                        <input type="checkbox" id="checkbox">
                                        <label for="checkbox">Remember me</label>
                                    </div>
                                    <div class="single-acc-field">
                                        <button type="submit">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layout.footer')
@endsection