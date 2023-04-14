  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">



<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Perhitungan</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index.php?beranda.php">Home</a></li>
          <li class="breadcrumb-item active">Perhitungan</li>
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
                <h3 class="card-title font-weight-bold mb-2">Tabel Matrix / Perhitungan</h3>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <table class="table table-bordered" id="example2">
                  <thead>
                    <tr class="text-center">
                      <th>No</th>
                      <th>Karyawan</th>
                      <th>K1</th>
                      <th>K2</th>
                      <th>K3</th>
                      <th>K4</th>
                      <th>K5</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php  
                $no = 0;
                  $query = mysqli_query($koneksi,"SELECT * FROM tb_penilaian");
                  while($pgw = mysqli_fetch_array($query)){
                    $no++
                ?>
                      <tr>
                      <td width='5%'><?php echo $no;?></td>
                        <td class="text-center"><?= $pgw['alternatif']; ?></td>
                        <td class="text-center"><?= $pgw['kemampuan_kerjasama']; ?></td>
                        <td class="text-center"><?= $pgw['presensi']; ?></td>
                        <td class="text-center"><?= $pgw['kedisiplinan']; ?></td>
                        <td class="text-center"><?= $pgw['penjualan']; ?></td>
                        <td class="text-center"><?= $pgw['lembur']; ?></td>
                      </tr>
                    <?php  
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row text-right mt-3">
              <div class="col">
                <form method="post">
                  <button type="submit" class="btn btn-primary" name="hitung"><i class="far fa-hourglass"></i> Hitung</button>
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