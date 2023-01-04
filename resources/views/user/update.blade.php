@extends('layoutadmin.main')
@section('content')
    <h2>Update Data User </h2>
    <form method="POST" action="/user/update/">
        {{ csrf_field() }}
        <div class="mb-3">
            <label class="form-label">EMAIL</label>
            <input type="text" name="email" class="form-control" value="{{ $dataUsers->email }}" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">NAMA</label>
            <input type="text" name="name" class="form-control" value="{{ $dataUsers->name }}"disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">STATUS</label>
            <select name="status" class="form-control" required>
                <option value="{{ $dataUsers->role }}">{{ $dataUsers->role }}</option>
                @foreach ($dataUsers as $item)
                    <option value="{{ $dataUsers->role }}"></option>
                @endforeach
            </select>
        </div>
       
        <a href="/user" class="btn btn-secondary">Kembali</a>
        <a href="/user" button type="submit" class="btn btn-primary">Update </button></a>
    </form>
@endsection