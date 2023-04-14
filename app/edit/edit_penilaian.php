  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Penilaian</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?beranda.php">Home</a></li>
          <li class="breadcrumb-item active">Penilaian</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>
  
  <?php
  $id_penilaian  = $_GET['id'];
  $query = mysqli_query($koneksi,"SELECT * FROM tb_penilaian WHERE id_penilaian='$id_penilaian'");
  $view  = mysqli_fetch_array($query);
  ?>
  
<section class="content">
  <div class="container-fluid">
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Edit Data Penilaian</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
      <form method="get" action="update/update_penilaian.php">
          <div class="row mb-3">
            <div class="col-md-6">
              <h5 class="font-weight-bold">Kriteria</h5>
            </div>
            <div class="col-md-6">
              <h5 class="font-weight-bold">Penilaian</h5>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">   
              <label>Alternatif</label>
            </div>
            <div class="col-md-6">
              <input class="form-control select2" style="width: 100%;" placeholder="Nilai" name="alternatif" required value="<?= $view['alternatif'];?>" disabled></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">   
              <label>(K1) Kemampuan Kerjasama</label>
            </div>
            <div class="col-md-6">
              <input class="form-control select2" style="width: 100%;" placeholder="Nilai" name="kemampuan_kerjasama" required value="<?= $view['kemampuan_kerjasama'];?>"></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label>(K2) Presensi</label>
            </div>
            <div class="col-md-6">
              <input class="form-control select2" style="width: 100%;" placeholder="Nilai" name="presensi" required value="<?= $view['presensi'];?>"></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label>(K3) Kedisiplinan</label>
            </div>
            <div class="col-md-6">
              <input class="form-control select2" style="width: 100%;" placeholder="Nilai" name="kedisiplinan" required value="<?= $view['kedisiplinan'];?>"></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label>(K4) Penjualan</label>
            </div>
            <div class="col-md-6">
              <input class="form-control select2" style="width: 100%;" placeholder="Nilai" name="penjualan" required value="<?= $view['penjualan'];?>"></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label>(K5) Lembur</label>
            </div>
            <div class="col-md-6">
              <input class="form-control select2" style="width: 100%;" placeholder="Nilai" name="lembur" required value="<?= $view['lembur'];?>"></input>
            </div>
          </div>
          <div class="d-flex justify-content-between">
            <a href="index.php?page=data_penilaian">
              <button type="button" class="btn btn-primary">Kembali</button>
            </a>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
        <!-- /.row -->
      </div>
      <!-- /.card-body -->
    </div>
  </div>
  <!-- /.container-fluid -->
</section>
</div>