 @extends('test')
@include('layout.style')
@include('layout.header')
@section('konten')
@section("component_css")

<link src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

@endsection

    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="/">home</a></li>
                            <li>Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    <!--shopping cart area start -->
    <div class="shopping_cart_area mt-60">
        <div class="container">  
            <form action="/chart" method="get"> 
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page table-responsive">
                                <table>
                            <thead>
                                <tr>
                                    <th class="gambar">gambar</th>
                                    <th class="produk">Produk</th>
                                    <th class="tanggal">Tanggal</th>
                                    <th class="alamat">Alamat</th>                                    
                                </tr>
                            </thead>                     
                            <tbody>
                                @foreach ($dataCheckout as $item )
                                <tr>
                                    <td>
                                        @if( in_array(pathinfo($item->gambar, PATHINFO_EXTENSION), ['png','jpg','jpeg']))
                                        <img src="{{ url('/storage/'.$item->gambar) }}" width="100" alt="image">
                                        @else
                                        <img src="https://www.freeiconspng.com/uploads/file-txt-icon--icon-search-engine--iconfinder-14.png"
                                        >
                                        @endif
                                    </td>
                                    <td>{{ $item->paket }}</td>
                                    <td>{{ $item->tanggal }}</td>
                                    <td>{{ $item->alamat }}</td>
                                </tr>                            
                                @endforeach
                            </tbody>
                        </table>   
                            </div>  
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
@include('layout.footer')
@endsection