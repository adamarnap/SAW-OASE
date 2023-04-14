  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  <?php
  $id_pegawai  = $_GET['id'];
  $query = mysqli_query($koneksi,"SELECT * FROM tb_alternatif WHERE id_pegawai='$id_pegawai'");
  $view  = mysqli_fetch_array($query);
  ?>
  <section class="content">
      <div class="container-fluid">
    <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Pegawai</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='get' action='update/update_data.php'>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nomor Induk Pegawai</label>
                        <input type="text" class="form-control" placeholder="nip" name='nip' value="<?php echo $view['nip'];?>">
                        <input type="text" class="form-control" placeholder="nip" name='id_pegawai' value="<?php echo $view['id_pegawai'];?>" hidden>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Nama Karyawan</label>
                        <input type="text" class="form-control" placeholder="nama" name='nama' value="<?php echo $view['nama'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Jabatan</label>
                            <select class="custom-select" id="inputGroupSelect01" name="jabatan">
                              <option value="<?php echo $view['jabatan'];?>" selected><?php echo $view['jabatan'];?></option>
                              <option value="PIC">PIC</option>
                              <option value="Manajer">Manajer</option>
                              <option value="Pusat">Pusat</option>
                            </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Bagian</label>
                        <select class="custom-select" id="inputGroupSelect01" name="bagian" >
                        <option value="<?php echo $view['bagian'];?>" selected><?php echo $view['bagian'];?></option>
                              <option value="Promotor">Promotor</option>
                              <option value="Gudang">Gudang</option>
                              <option value="Sales">Sales</option>
                            </select>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Tanggal Masuk</label>
                        <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk"></input>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer justify-content-between">
                          <a href="index.php?page=data_alternatif">
                          <button type="button" class="btn btn-primary">Kembali</button>
                          </a>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
    </div>
</section>
                <!-- /.content -->
  </div>