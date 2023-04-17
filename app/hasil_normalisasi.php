<?php
  require_once 'proses_perhitungan.php';
?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">



<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Normalisasi</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?beranda.php">Home</a></li>
          <li class="breadcrumb-item active">Normalisasi</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h3 class="card-title font-weight-bold mb-2">Tabel Matrix / Normalisasi</h3>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <table class="table table-bordered" id="example2">
                  <thead>
                    <tr class="text-center">
                      <th>Kriteria</th>
                      <th>Alternatif 1</th>
                      <th>Alternatif 2</th>
                      <th>Alternatif 3</th>
                      <th>Alternatif 4</th>
                      <th>Alternatif 5</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php  
                      $no = 1;
                      foreach ($hasilNormalisasi as $data) {
                    ?>
                      <tr>
                        <td class="font-weight-bold">K<?= $no; ?></td>
                        <td><?= $data['K1'];?></td>
                        <td><?= $data['K2'];?></td>
                        <td><?= $data['K3'];?></td>
                        <td><?= $data['K4'];?></td>
                        <td><?= $data['K5'];?></td>
                      </tr>
                    <?php 
                        $no++; 
                      }
                    ?>
                  </tbody>


                </table>
              </div>
            </div>
            <div class="row text-right mt-3">
              <div class="col">
              <a href="index.php?page=hasil_preferensi">
                  <button class="btn btn-primary"><i class="far fa-hourglass"></i> Lihat Hasil Preferensi</button>
                    </a>
              </div>    
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
<!-- /.content -->
  </div>