@extends('test')
@include('layout.style')

@section('konten')



<!--error section area start-->
<div class="error_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="error_form">
                    <img src="assets/img/404.jpg" alt="" />
                    <h2>Opps! PAGE NOT BE FOUND</h2>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random <br /> text. It has roots in a piece
                        of classical</p>
                    <a href="/">Back to home page</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--error section area end-->

@endsection