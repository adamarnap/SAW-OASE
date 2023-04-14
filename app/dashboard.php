  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?beranda.php">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
<div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <?php
    include("../conf/config.php");
    $query = mysqli_query($koneksi,"SELECT count(id_pegawai)AS jmlalternatif FROM tb_alternatif");
    $view = mysqli_fetch_array($query);?>

    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3><?php echo $view['jmlalternatif'];?></h3>

          <p>ALTERNATIF</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="index.php?page=data_alternatif" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <?php
    include("../conf/config.php");
    $query = mysqli_query($koneksi,"SELECT count(id_kriteria)AS jmlkriteria FROM tb_kriteria");
    $view = mysqli_fetch_array($query);?>
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3><?php echo $view['jmlkriteria'];?></h3>

          <p>KRITERIA</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="index.php?page=data_kriteria" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <?php
    include("../conf/config.php");
    $query = mysqli_query($koneksi,"SELECT count(id_penilaian)AS jmlpenilaian FROM tb_penilaian");
    $view = mysqli_fetch_array($query);?>
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3><?php echo $view['jmlpenilaian'];?></h3>

          <p>PENILAIAN</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="index.php?page=data_penilaian" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>65</h3>

          <p>HASIL PREFERENSI</p>
        </div>
        <div class="icon">
          <i class="far fa-file-alt"></i>
        </div>
        <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>

  <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
</div>