@extends('layoutadmin.main')
@section('css')
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/jqvmap/jqvmap.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/summernote/summernote-bs4.min.css">
@endsection
@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>1</h3>
                    <p>Home</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="/dashboardadmin" class="small-box-footer">More info <i class="fas fa-arrowcircle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>2</h3>
                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="/user" class="small-box-footer">More info <i class="fas fa-arrowcircle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>3</h3>
                    <p>Profil</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="/profil" class="small-box-footer">More info <i class="fas fa-arrowcircle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <!-- table produk baru -->
    
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Paket BestSeller</h4>
            <div class="card-tools">
              <a href="/productlist" class="btn btn-sm btn-primary">
                More
              </a>
            </div>
          </div>
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>PRO-1</td>
                  <td>Rumahan</td>
                  <td>Gold</td>
                  <td>26.000.000</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>PRO-2</td>
                  <td>Gedung</td>
                  <td>Platinum</td>
                  <td>33.000.000</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>PRO-3</td>
                  <td>Rumahan</td>
                  <td>Platinum Wanita</td>
                  <td>31.000.000</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection