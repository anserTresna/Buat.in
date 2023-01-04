@extends('layoutseller.main')
@section('content')
@section("component_css")

<link src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

@endsection
    <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>TANGGAL</th>
                <th>GAMBAR</th>
                <th>PAKET</th>
                <th>ORDER NOTES</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($dataCheckout as $item)
        <tr>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>
                @if( in_array(pathinfo($item->gambar, PATHINFO_EXTENSION), ['png','jpg','jpeg']))
                    <img src="{{ url('/storage/'.$item->gambar) }}" width="100" alt="image">
                @else
                    <img src="https://www.freeiconspng.com/uploads/file-txt-icon--icon-search-engine--iconfinder-14.png">
                @endif
            </td>
            {{-- <td>{{ $item->gambar }}</td> --}}
            <td>{{ $item->paket }}</td>
            <td>{{ $item->order_notes }}</td>
            <td>
                <a href="/seller/transaksi/destroy/{{ $item->id }}" class="btn btn-sm btn-danger">Hapus</a>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
    @endsection
