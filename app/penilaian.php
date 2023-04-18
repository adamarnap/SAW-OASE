
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

<!-- Main content -->


<section class="content">
  <div class="container-fluid">
    <!-- SELECT2 EXAMPLE -->
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Silahkan Masukan Penilaian</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form action="add/tambah_penilaian.php" method="get">
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
              <label for="alternatif">Alternatif</label>
            </div>
            <div class="col-md-6">
              <select class="form-control" name="alternatif" id="alternatif">
                <option selected="selected" disabled>-- Pilih Karyawan --</option>
                <?php
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_alternatif");
                    while($pgw = mysqli_fetch_array($query)){
                        echo '<option value="'.$pgw['nama'].'">'.$pgw['nama'].'</option>';
                    }
                ?>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">   
              <label>(K1) Kemampuan Kerjasama</label>
            </div>
            <div class="col-md-6">
              <input class="form-control" style="width: 100%;" placeholder="Nilai" name="kemampuan_kerjasama" required></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label>(K2) Presensi</label>
            </div>
            <div class="col-md-6">
              <input class="form-control" style="width: 100%;" placeholder="Nilai" name="presensi" required></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label>(K3) Kedisiplinan</label>
            </div>
            <div class="col-md-6">
              <input class="form-control" style="width: 100%;" placeholder="Nilai" name="kedisiplinan" required></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label>(K4) Penjualan</label>
            </div>
            <div class="col-md-6">
              <input class="form-control" style="width: 100%;" placeholder="Nilai" name="penjualan" required></input>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <label>(K5) Lembur</label>
            </div>
            <div class="col-md-6">
              <input class="form-control" style="width: 100%;" placeholder="Nilai" name="lembur" required></input>
            </div>
          </div>

          <div class="simpan text-right">
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

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered">
              <thead>
                <tr class="text-center">
                  <th>No</th>
                  <th>Karyawan</th>
                  <th>K1</th>
                  <th>K2</th>
                  <th>K3</th>
                  <th>K4</th>
                  <th>K5</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php  
                $no = 0;
                  $query = mysqli_query($koneksi,"SELECT * FROM tb_penilaian");
                  while($pgw = mysqli_fetch_array($query)){
                    $no++;
                ?>
                  <tr class="text-center">
                  <td width='5%'><?php echo $no;?></td>
                    <td class="text-center"><?= $pgw['alternatif']; ?></td>
                    <td class="text-center"><?= $pgw['kemampuan_kerjasama']; ?></td>
                    <td class="text-center"><?= $pgw['presensi']; ?></td>
                    <td class="text-center"><?= $pgw['kedisiplinan']; ?></td>
                    <td class="text-center"><?= $pgw['penjualan']; ?></td>
                    <td class="text-center"><?= $pgw['lembur']; ?></td>
                    <td>
                        <a onclick="hapus_data(<?php echo $pgw['id_penilaian'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                        <a href="index.php?page=edit-penilaian&& id=<?php echo $pgw['id_penilaian'];?>" class="btn btn-sm btn-success">Edit</a>
                    </td>
                  </tr>
                <?php  
                  }
                ?>
              </tbody>
            </table>
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
  </div>
  <script>
    function hapus_data(data_id){
      // alert('ok');
      // window.location=("add/hapus_penilaian.php?id_penilaian="+data_id);
            Swal.fire({
        title: 'Apakah Datanya Akan Dihapus?',
        // showDenyButton: false,
        showCancelButton: true,
        confirmButtonText: 'Hapus Data',
        confirmButtonColor: '#CD5C5C',
        // denyButtonText: `Don't save`,
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          window.location=("add/hapus_penilaian.php?id_penilaian="+data_id);
        } 
      })
    }
  </script>


