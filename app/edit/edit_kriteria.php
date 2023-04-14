  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  <?php
  $id_kriteria  = $_GET['id'];
  $query = mysqli_query($koneksi,"SELECT * FROM tb_kriteria WHERE id_kriteria='$id_kriteria'");
  $view  = mysqli_fetch_array($query);
  ?>
  <section class="content">
      <div class="container-fluid">
    <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Kriteria</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form method="get" action="update/update_kriteria.php">
            <div class="modal-body">
                            <div class="panel panel-default">
                          <div class="panel-body">
                          <div class="form-group">
                              <label for="kriteria">Kriteria</label>
                                <select class="custom-select" id="inputGroupSelect01" name="kriteria" required>
                                <option value="<?php echo $view['kriteria'];?>" selected><?php echo $view['kriteria'];?></option>
                              <option value="Kemampuan Kerjasama">Kemampuan Kerjasama</option>
                              <option value="Presensi">Presensi</option>
                              <option value="Kedisiplinan">Kedisiplinan</option>
                              <option value="Penjualan">Penjualan</option>
                              <option value="Lembur">Lembur</option>
                            </select>
                          </div>
                          <div class="form-group">
                              <label for="bobot">Bobot</label>
                              <input type="text" class="form-control" placeholder="bobot" name='bobot' value="<?php echo $view['bobot'];?>">
                              <input type="text" class="form-control" placeholder="bobot" name='id_kriteria' value="<?php echo $view['id_kriteria'];?>" hidden>
                          </div> 
                          <div class="modal-footer justify-content-between">
                          <a href="index.php?page=data_kriteria">
                          <button type="button" class="btn btn-primary">Kembali</button>
                          </a>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                      
                  </div>
              </div>
              </div>
            
          </form>


              </div>
              <!-- /.card-body -->
            </div>
    </div>
</section>
                <!-- /.content -->
  </div>