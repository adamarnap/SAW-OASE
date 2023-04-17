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
        <h1>Preferensi</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?beranda.php">Home</a></li>
          <li class="breadcrumb-item active">Preferensi</li>
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
                <h3 class="card-title font-weight-bold mb-2">Tabel Matrix / Preferensi</h3>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <table class="table table-bordered" id="example2">
                  <thead>
                      <th>Urutan</th>
                      <th>Alternatif</th>
                      <th>K1</th>
                      <th>K2</th>
                      <th>K3</th>
                      <th>K4</th>
                      <th>K5</th>
                      <th>Total</th>
                  </thead>
                  <tbody class="text-center">  
                    <?php
                      $no = 1;  
                      foreach ($hasilPreferensi as $data) {
                    ?>
                      <tr>
                        <td><?= $no; ?></td>
                        <td><?= $data['alternatif'];?></td>
                        <td><?= $data['K1'];?></td>
                        <td><?= $data['K2'];?></td>
                        <td><?= $data['K3'];?></td>
                        <td><?= $data['K4'];?></td>
                        <td><?= $data['K5'];?></td>
                        <td><?= $data['total'];?></td>
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
              <form method="post>
                <a href="pages/perhitungan/Cetak_Hasil.php" target="_blank">
                      <button type="button" class="btn btn-primary"><i class="far fa-file-pdf"></i> Cetak Hasil</button>
                    </a>
                    <button type="submit" class="btn btn-primary" name="reset" onclick="return confirm('Yakin ingin reset ulang? Semua data serta hasil akan terhapus semua'); "><i class="fas fa-redo"></i> Reset Ulang</button>
                </form>
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