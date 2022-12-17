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
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<section class="account">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="account-contents"
                    style="background: url('assets/img/about/about1.jpg'); background-size: cover;">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="account-thumb">
                                <h2>Login now</h2>
                                <p>"Selamat datang di halaman login Buat.in. Silakan masukkan email dan password Anda untuk masuk ke akun Anda"</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="account-content">
                                @if (session('loginError'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('loginError') }}
                                </div>
                                @endif
                                @if(session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{session('success')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                                {{-- @if(session()->has('message'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{session('message')}}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif --}}
                                <form action="/login" method="POST">
                                    @csrf
                                    <label for>Email</label>
                                    <div class="form mb-3">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter You Email" autofocus required
                                            value="">                                      
                                    </div>
                                    <label for>Password</label>
                                    <div class="form mb-3">
                                        <input type="password" name="password" class="form-control" id="password"
                                            placeholder="Enter You password" required="">
                                    </div>
                                    {{-- <div class="single-acc-field"> --}}
                                        {{-- <label for="email">Email</label> --}}
                                        {{-- <input type="email" name="email" id="email" placeholder="Enter your Email"
                                            autofocus required=""> --}}
                                        {{-- </div> --}}
                                    {{-- <div class="single-acc-field"> --}}
                                        {{-- <label for="password">Password</label> --}}
                                        {{-- <input type="password" name="password" id="password"
                                            placeholder="Enter your password" required=""> --}}
                                        {{-- </div> --}}

                                    <div class="single-acc-field">
                                        <button type="submit">Login Account</button>
                                    </div>                    
                                    <a href="/register">Not Account Yet?</a>
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