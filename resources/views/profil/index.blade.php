@extends('layoutadmin.main')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col col-lg-4 col-md-4">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img src="{{ asset('adminlte') }}/dist/img/admin.jpg" class="img-circle elevation-2" width="50" height="50">

          </div>
          <h3 class="profile-username text-center">Cindy Apriliyani</h3>
          
          <p class="text-muted text-center">Member sejak : 20 Des 2020</p>
          <hr>
          <strong>
            <i class="fas fa-envelope mr-2"></i>
            Email
          </strong>
          <p class="text-muted">
            apriliyanicindy046@gmail.com
          </p>
          <hr>
          <strong>
            <i class="fas fa-map-marker mr-2"></i>
           Alamat
          </strong>
          <p class="text-muted">
            Jatibarang - Indramayu 45273
          </p>
          <hr>
          <strong>
            <i class="fas fa-phone mr-2"></i>
            No Tlp
          </strong>
          <p class="text-muted">
            083825773810
          </p>
          <hr>
          <a href="{{ URL::to('profil/edit') }}" class="btn btn-primary btn-block">Edit</a>
        </div>
      </div>      
    </div>
            </div>
        </div>
@endsection