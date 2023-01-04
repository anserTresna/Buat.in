@extends('layoutadmin.main')
@section('content')
    <table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <th>EMAIL</th>
                <th>NAMA</th>
                <th>STATUS</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($dataUsers as $item)
        <tr>
            <td>{{ $item->email }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->role }}</td>
            <td>
                <a href="/user/edit/{{ $item->id }}"
                    class="btn btn-sm btn-warning">Edit</a> 
                <a href="/user/destroy/{{ $item->id }}"
                    class="btn btn-sm btn-danger">Hapus</a> 
            </td>
        </tr>
    @endforeach
    </tbody>
    </table>
    @endsection
