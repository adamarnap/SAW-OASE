
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Alternatif</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php?beranda.php">Home</a></li>
              <li class="breadcrumb-item active">Alternatif</li>
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
                  Tambah Data
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Bagian</th>
                    <th>Tanggal Masuk</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_alternatif");
                    while($pgw = mysqli_fetch_array($query)){
                      $no++
                    ?>
                  <tr class="text-center">
                    <td width='5%'><?php echo $no;?></td>
                    <td><?php echo $pgw['nip'];?></td>
                    <td><?php echo $pgw['nama'];?></td>
                    <td><?php echo $pgw['jabatan'];?></td>
                    <td><?php echo $pgw['bagian'];?></td>
                    <td><?php echo $pgw['tanggal_masuk'];?></td>
                    <td>
                    
                      <a onclick="hapus_data(<?php echo $pgw['id_pegawai'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-data&& id=<?php echo $pgw['id_pegawai'];?>" class="btn btn-sm btn-success">Edit</a>
                      
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
              <h4 class="modal-title">Tambah Data Karyawan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="add/tambah_data.php">
            <div class="modal-body">
                            <div class="panel panel-default">
                          <div class="panel-body">
                          <div class="form-group">
                              <label for="nip">Nomor Induk Pegawai</label>
                              <input type="text" class="form-control" id="nip" name="nip" required>
                          </div>
                          <div class="form-group">
                              <label for="nama">Nama Karyawan</label>
                              <input type="text" class="form-control" id="nama" name="nama" required>
                          </div>
                          <div class="form-group">
                              <label for="jabatan">Jabatan</label>
                                <select class="custom-select" id="inputGroupSelect01" name="jabatan" required>
                              <option selected>Pilih . . .</option>
                              <option value="PIC">PIC</option>
                              <option value="Manajer">Manajer</option>
                              <option value="Pusat">Pusat</option>
                            </select>
                          </div>
                          <div class="form-group">
                              <label for="bagian">Bagian</label>
                                <select class="custom-select" id="inputGroupSelect01" name="bagian" required>
                              <option selected>Pilih . . .</option>
                              <option value="Promotor">Promotor</option>
                              <option value="Gudang">Gudang</option>
                              <option value="Sales">Sales</option>
                            </select>
                          </div>
                          <div class="form-group">
                              <label for="tanggal_masuk">Tanggal Masuk</label>
                              <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" required>
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
      // window.location=("add/hapus_data.php?id_pegawai="+data_id);
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
          window.location=("add/hapus_data.php?id_pegawai="+data_id);
        } 
      })
    }
  </script>


