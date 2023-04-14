
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kriteria</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?beranda.php">Home</a></li>
              <li class="breadcrumb-item active">Kriteria</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->


              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Buat Kriteria
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Kriteria</th>
                    <th>Bobot</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_kriteria");
                    while($pgw = mysqli_fetch_array($query)){
                      $no++
                    ?>
                  <tr class="text-center">
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $pgw['kriteria'];?></td>
                    <td><?php echo $pgw['bobot'];?></td>
                    <td>
                    
                      <a onclick="hapus_data(<?php echo $pgw['id_kriteria'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-kriteria&& id=<?php echo $pgw['id_kriteria'];?>" class="btn btn-sm btn-success">Edit</a>
                      
                    </td>
                  </tr>
                  <?php }?>
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
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Buat Kriteria & Bobot</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_kriteria.php">
            <div class="modal-body">
                            <div class="panel panel-default">
                          <div class="panel-body">
                          <div class="form-group">
                              <label for="kriteria">Kriteria</label>
                                <select class="custom-select" id="inputGroupSelect01" name="kriteria" required>
                              <option selected>Pilih . . .</option>
                              <option value="Kemampuan Kerjasama">Kemampuan Kerjasama</option>
                              <option value="Presensi">Presensi</option>
                              <option value="Kedisiplinan">Kedisiplinan</option>
                              <option value="Penjualan">Penjualan</option>
                              <option value="Lembur">Lembur</option>
                            </select>
                          </div>
                          <div class="form-group">
                              <label for="bobot">Bobot</label>
                              <input type="text" class="form-control" id="bobot" name="bobot" required>
                          </div> 
                          <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                      
                  </div>
              </div>
              </div>
            
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    <!-- /.content -->
  </div>
  <script>
    function hapus_data(data_id){
      // alert('ok');
      // window.location=("add/hapus_kriteria.php?id_kriteria="+data_id);
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
          window.location=("add/hapus_kriteria.php?id_kriteria="+data_id);
        } 
      })
    }
  </script>


