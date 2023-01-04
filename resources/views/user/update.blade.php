@extends('layoutadmin.main')
@section('content')
    <h2>Update Data User </h2>
    <form method="POST" action="/admin/user/update/{{$dataUsers->id}}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="email">EMAIL</label>
            <input type="text" name="email" class="form-control" value="{{ $dataUsers->email }}" disabled>
        </div>
        <div class="mb-3">
            <label class="nama">NAMA</label>
            <input type="text" name="name" class="form-control" value="{{ $dataUsers->name }}"disabled>
        </div>
        <div class="mb-3">
            <label class="role">STATUS</label>
            <select name="role" id="role" class="form-control" required>                
                <option value="user">user</option>
                <option value="seller">seller</option>
                <option value="admin">admin</option>         
            </select>
        </div>

        <a href="/admin/user" class="btn btn-secondary">Kembali</a>
        <button type="submit" class="btn btn-primary">Update </button></a>
    </form>
@endsection