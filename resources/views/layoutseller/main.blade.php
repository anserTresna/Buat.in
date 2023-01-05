@include('layoutseller.header');
<div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-itemscenter">
        <img class="animation__shake" src="{{ asset('adminlte') }}/dist/img/AdminLTELogo.png" alt="AdminLTELogo"
            height="60" width="60">
    </div>
    @include('layoutseller.sidebar');
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Welcome, {{Auth::user()->name}}</h1>
                    </div><!-- /.col -->
                    <!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@include('layoutseller.footer');
