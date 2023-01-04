@extends('layoutseller.main')
@section('content')
@section("component_css")

<link src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

@endsection
<table class="table table-bordered table-striped" id=example1">
    <thead>
        <tr>
            <th>NAMA</th>
            <th>HARGA</th>
            <th>DETAIL</th>
            <th>GAMBAR</th>
            <th>
                <a href="/seller/product/create" class="btn btn-success">
                    Tambah Product
                </a>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dataProduct as $item )
        <tr>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->harga }}</td>
            <td>{{ $item->detail }}</td>
            <td>
                @if( in_array(pathinfo($item->gambar, PATHINFO_EXTENSION), ['png','jpg','jpeg']))
                    <img src="{{ url('/storage/'.$item->gambar) }}" width="100" alt="image">
                @else
                    <img src="https://www.freeiconspng.com/uploads/file-txt-icon--icon-search-engine--iconfinder-14.png">
                @endif
                </td>
            <td>
                <a href="/seller/product/edit/{{ $item->id }}" class="btn btn-sm btn-warning">Edit</a>
                <a href="/seller/product/destroy/{{ $item->id }}" class="btn btn-sm btn-danger">Hapus</a>
            </td>
        </tr>
        
        @endforeach
    </tbody>
</table>
@endsection