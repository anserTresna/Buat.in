@extends('layoutseller.main')
@section('content')
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
                <img src="{{ url('/storage/'.$item->gambar) }}" height="40" alt="image">
            </td>
            {{-- <td>{{ $item->gambar }}</td> --}}
            <td>{{ $item->paket }}</td>
            <td>{{ $item->order_notes }}</td>
            <td>
                <a href="/transaksi/destroy/{{ $item->id }}" class="btn btn-sm btn-danger">Hapus</a>
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
    @endsection
