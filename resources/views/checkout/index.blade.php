@extends('test')
@include('layout.style')
@include('layout.header')
@section('konten')
<!doctype html>
<html class="no-js" lang="en">

<!-- checkout.html  03:24:27 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Event Organizer-Buat.in</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS 
    ========================= -->


    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
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
                    <div class="user-actions">
                        <h3>
                            <i class="fa fa-file-o" aria-hidden="true"></i>
                            Returning customer?
                            <a class="Returning" href="#" data-toggle="collapse" data-target="#checkout_login"
                                aria-expanded="true" aria-controls="checkout_login">Click here to login</a>

                        </h3>
                        <div id="checkout_login" class="collapse" data-parent="#accordionExample">
                            <div class="checkout_info">
                                <p>If you have shopped with us before, please enter your details in the boxes below. If
                                    you are a new customer please proceed to the Billing & Shipping section.</p>
                                <form action="#">
                                    <div class="form_group">
                                        <label>Username or email <span>*</span></label>
                                        <input type="text">
                                    </div>
                                    <div class="form_group">
                                        <label>Password <span>*</span></label>
                                        <input type="text">
                                    </div>
                                    <div class="form_group group_3 ">
                                        <button type="submit">Login</button>
                                        <label for="remember_box">
                                            <input id="remember_box" type="checkbox">
                                            <span> Remember me </span>
                                        </label>
                                    </div>
                                    <a href="#">Lost your password?</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkout_form">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <form action="#">
                            <h3>Billing Details</h3>
                            <div class="row">
                                <div class="mb-3">
                                    <label class="form-label">NAMA</label>
                                    <input type="text" name="nama" id="nama" class="form-control" autofocus required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">ALAMAT</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" autofocus
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">TANGGAL</label>
                                    <input type="date" name="tanggal" id="tanggal" class="form-control" autofocus
                                        required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">PAKET</label>
                                    <select name="products" class="form-control" required>
                                        <option value="">Pilih</option>
                                        @foreach ($dataProducts as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 mb-20">
                                <input id="account" type="checkbox" data-target="createp_account" />
                                <label for="account" data-toggle="collapse" data-target="#collapseOne"
                                    aria-controls="collapseOne">Create an account?</label>

                                <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body1">
                                        <label> Account password <span>*</span></label>
                                        <input placeholder="password" type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-20 accordion" id="accordionExample">
                                <input id="address" type="checkbox" data-target="createp_account" />
                                <label class="righ_0" for="address" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-controls="collapseTwo">Ship to a different
                                    address?</label>

                                <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                    <div class="row">
                                        <div class="col-lg-6 mb-20">
                                            <label>First Name <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label>Last Name <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Company Name</label>
                                            <input type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <div class="select_form_select">
                                                <label for="countru_name">country <span>*</span></label>
                                                <select class="niceselect_option" name="cuntry" id="countru_name">
                                                    <option value="2">bangladesh</option>
                                                    <option value="3">Algeria</option>
                                                    <option value="4">Afghanistan</option>
                                                    <option value="5">Ghana</option>
                                                    <option value="6">Albania</option>
                                                    <option value="7">Bahrain</option>
                                                    <option value="8">Colombia</option>
                                                    <option value="9">Dominican Republic</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Street address <span>*</span></label>
                                            <input placeholder="House number and street name" type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Town / City <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>State / County <span>*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label>Phone<span>*</span></label>
                                            <input type="text">

                                        </div>
                                        <div class="col-lg-6">
                                            <label> Email Address <span>*</span></label>
                                            <input type="text">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="order-notes">
                                    <label for="order_note">Order Notes</label>
                                    <textarea id="order_note" rows="2"
                                        placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6">
                    <form action="#">
                </div>
                <div class="order_button">
                    <button type="submit">Proceed to buy</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!--Checkout page section end-->

    <!-- JS
============================================ -->


    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>



</body>

<!-- checkout.html  03:24:27 GMT -->

</html>
@include('layout.footer')
@endsection