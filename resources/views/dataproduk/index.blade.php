@extends('layoutseller.main')
@section('content')
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
            <td>{{ $item->gambar }}</td>
            <td>
                <a href="/seller/product/edit/{{ $item->id }}" class="btn btn-sm btn-warning">Edit</a>
                <a href="/seller/product/destroy/{{ $item->id }}" class="btn btn-sm btn-danger">Hapus</a>
            </td>
        </tr>
        
        @endforeach
    </tbody>
</table>
@endsection