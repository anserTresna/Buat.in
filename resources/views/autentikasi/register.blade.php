@extends('test')
@include('layout.style')
@include('layout.header')
@section('konten')
<!--breadcrumbs area end-->
<section class="account">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                
                <div class="account-contents"
                    style="background: url('assets/img/about/about1.jpg'); background-size: cover;">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="account-thumb">
                                <h2>Register now</h2>
                                <p>"Selamat datang di halaman pendaftaran Buat.in. Jika Anda belum memiliki akun, silakan isi formulir di bawah ini untuk
                                mendaftar"</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="account-content">
                                <form action="/register" method="post">
                                    <div class="single-acc-field">
                                        @csrf                                        
                                        {{-- <label for="nama">Nama</label> --}}
                                        {{-- @error('name') --}}
                                        {{-- <div class="invalid-feedback"> --}}
                                            {{-- Please enter the correct fill. --}}
                                        {{-- </div> --}}
                                        {{-- @enderror --}}
                                        {{-- <input type="text" name="nama" @error('name') is-invalid @enderror id="nama" autofocus placeholder="Enter Your Name"> --}}
                                        
                                    {{-- </div> --}}
                                    <label for>Nama</label>
                                    @error('name')
                                        <div class="invalid-feedback">
                                            Please enter the correct fill.
                                        </div>
                                        @enderror
                                    <div class="mb-3">
                                    <input type="text" name="name" @error('name') is-invalid @enderror class="form-control" id="name" placeholder="Enter You Name" autofocus required="">                                
                                    </div>
                                    <label for>Email</label>
                                    <div class="mb-3">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email" required="">                                
                                    </div>
                                    <label for>Password</label>                                    
                                    <div class="mb-3">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter You password" required="">                                
                                    <div id="passwordHelpBlock" class="form-text">
                                        Your password must be 6 characters long, contain letters and numbers.
                                    </div>
                                    
                                    {{-- <div class="single-acc-field"> --}}
                                        {{-- <label for="email">Email</label> --}}
                                        {{-- <input type="email" name="email" id="email" placeholder="Enter your Email"> --}}
                                    {{-- </div> --}}
                                    {{-- <div class="single-acc-field"> --}}
                                        {{-- <label for="password">Password</label> --}}
                                        {{-- <input type="password" name="password" id="password" placeholder="At least 6 Charecter"> --}}
                                    {{-- </div> --}}
                                    
                                    <div class="single-acc-field">
                                        <button type="submit">Register now</button>
                                    </div>
                                    <a href="/login">Already account? Login</a>
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