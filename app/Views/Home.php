<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <!-- Box untuk Deskripsi -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header text-center">
            <h4>Sistem Pendukung Keputusan Pemilihan Paket Wedding Organizer</h4>
          </div>
          <div class="card-body">
            <p class="text-center">
              Sistem ini merupakan aplikasi berbasis web yang dirancang untuk mendukung pengambilan keputusan dalam memilih paket wedding organizer (WO). Sistem ini menggunakan pendekatan berbasis data dengan menyediakan berbagai fitur utama, termasuk pengelolaan data paket, kriteria, bobot, dan alternatif. Melalui dashboard yang intuitif, pengguna dapat dengan mudah mengakses informasi penting terkait paket wedding, seperti daftar paket yang tersedia, kriteria evaluasi, bobot penilaian untuk setiap kriteria, serta alternatif pilihan paket yang relevan.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <p>Data Paket</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="<?php echo site_url(relativePath: 'paket'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <p>Data Kriteria</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="<?php echo site_url(relativePath: 'kriteria'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <p>Data Bobot</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="<?php echo site_url(relativePath: 'bobot'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <p>Data Alternatif</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="<?php echo site_url(relativePath: 'alternatif'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
