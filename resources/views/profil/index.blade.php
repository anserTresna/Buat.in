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
          <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>
          
          <p class="text-muted text-center"> Bergabung Sejak {{Auth::user()->created_at}}</p>
          <hr>
          <strong>
            <i class="fas fa-envelope mr-2"></i>
            Email
          </strong>
          <p class="text-muted">
           {{Auth::user()->email}}
          </p>
          <hr>
          <strong>
            <i class="fas fa-map-marker mr-2"></i>
           Alamat
          </strong>
          <p class="text-muted">
            
          </p>
          <hr>
          <strong>
            <i class="fas fa-phone mr-2"></i>
            No Tlp
          </strong>
          <p class="text-muted">
            
          </p>
          <hr>
          <a href="/admin/profil/edit/" class="btn btn-primary btn-block">Edit</a>
        </div>
      </div>      
    </div>
            </div>
        </div>
@endsection