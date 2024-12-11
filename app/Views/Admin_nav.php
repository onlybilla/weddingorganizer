<base href="<?php echo base_url("assets")?>/">
<!-- Main Sidebar Container -->
<style>
  .nav-sidebar .nav-link.active {
      background-color: #1f2d3d;
      color: #ffffff;
  }

  .nav-sidebar .nav-link:hover {
      background-color: #343a40;
      color: #ffffff;
  }
  .nav-treeview > .nav-item > .nav-link {
    padding-left: 40px;
  }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/logo.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">SAW Method</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="<?php echo site_url('Home/home');?>" class="nav-link <?= (uri_string() == 'Home/home') ? 'active' : '' ?>">
            <i class="fas fa-id-card-clip"></i>
              <p>Home</p>
            </a>
          </li>

          <li class="nav-item <?= (uri_string() == 'datajs/view' || uri_string() == 'dataumkm/view' || uri_string() == 'datakriteria/view' || uri_string() == 'databobot/view') ? 'menu-open' : '' ?>">
            <a href="#" class="nav-link <?= (uri_string() == 'datajs/view' || uri_string() == 'dataumkm/view' || uri_string() == 'datakriteria/view' || uri_string() == 'databobot/view') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Master Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url(relativePath: 'paket'); ?>" class="nav-link <?= (uri_string() == 'datajs/view') ? 'active' : '' ?>">
                <i class="fas fa-bars-staggered"></i>
                  <p>Data Paket</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo site_url(relativePath: 'kriteria');?>" class="nav-link <?= (uri_string() == 'dataumkm/view') ? 'active' : '' ?>">
                <i class="fas fa-bars-staggered"></i>
                  <p>Data Kriteria</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo site_url(relativePath: 'bobot');?>" class="nav-link <?= (uri_string() == 'dataumkm/view') ? 'active' : '' ?>">
                <i class="fas fa-bars-staggered"></i>
                  <p>Data Bobot</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="<?php echo site_url(relativePath: 'alternatif');?>" class="nav-link <?= (uri_string() == 'dataumkm/view') ? 'active' : '' ?>">
                <i class="fas fa-bars-staggered"></i>
                  <p>Data Alternatif</p>
                </a>
              </li>
          <li class="nav-item">
            <a href="<?php echo site_url('Home/callviewhitung');?>" class="nav-link <?= (uri_string() == 'Home/callviewhitung') ? 'active' : '' ?>" >
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Mencari Min Max
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('Home/callviewnormalisasi');?>" class="nav-link <?= (uri_string() == 'Home/callviewnormalisasi') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Hitung Normalisasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('Home/callviewranking');?>" class="nav-link <?= (uri_string() == 'Home/callviewranking') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Hitung Perangkingan
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="<?php echo site_url('Home/callviewkeputusan');?>" class="nav-link <?= (uri_string() == 'Home/callviewkeputusan') ? 'active' : '' ?>">
              <i class="nav-icon fas fa-edit"></i>
              <p>
              Hasil Keputusan
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
    </div>
</aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    
    </div>
    <!-- /.content-header -->