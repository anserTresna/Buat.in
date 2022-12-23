<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/" class="brand-link">
      <img src="{{ asset('adminlte') }}/dist/img/onlyus.jpeg" alt="onlyus.jpeg"
          class="brand-image img-circle elevation-3" style="opacity:.8">
      <span class="brand-text font-weight-light">ADMIN BUAT.IN</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
              <img src="{{ asset('adminlte') }}/dist/img/adminonlyus.png" alt="profil" class="profile-user-img img-responsive img-circle" width="50" height="50">
          </div>
          <div class="info">
              <a href="/" class="d-block">Admin Buat.in</a>
          </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
              <li class="nav-item">
                  <a href="/dashboard" class="nav-link
                      {{ $slug == 'dashboard' ? 'active' : '' }}">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                          Dashboard
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="/profil" class="nav-link
                      {{ $slug == 'profil' ? 'active' : '' }}">
                      <i class="nav-icon fas fa-user"></i>
                      <p>
                          Profil
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                <a href="/user" class="nav-link
                    {{ $slug == 'user' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        User
                    </p>
                </a>
              <li class="nav-item">
                <a href="/laporan" class="nav-link
                    {{ $slug == 'laporan' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        Laporan
                    </p>
                </a>
            </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-sign-out-alt"></i>
                      <p>
                        Sign Out
                      </p>
                    </a>
                  </li>
                </ul>
              </nav>
          </ul>
      </nav>
  </div>
  <!-- /.sidebar -->
</aside>