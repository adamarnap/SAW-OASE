<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if(!$_SESSION['nama']){
    header('location ../index.php?session=expired');
}
    include('header.php');?>
<?php include('../conf/config.php');?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/olike.jpg" alt="AdminLogo" height="500" width="500">
  </div>

  <!-- Navbar -->
  <?php include('navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/oasee.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">OASE Teknologi Asia</span>
    </a>

    <!-- Sidebar -->
    <?php include('sidebar.php');?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->

    <!-- /.content-header -->

    <!-- Main content -->
    <?php 
    if (isset($_GET['page'])){
        if ($_GET['page']=='dashboard'){
            include('dashboard.php');
        }
        else if($_GET['page']=='data_alternatif'){
            include('alternatif.php');
        }
        else if($_GET['page']=='edit-data'){
          include('edit/edit_data.php');
       }
       else if($_GET['page']=='data_kriteria'){
        include('kriteria.php');
     }
        else if($_GET['page']=='edit-kriteria'){
          include('edit/edit_kriteria.php');
      }
      else if($_GET['page']=='data_penilaian'){
        include('penilaian.php');
     }
        else if($_GET['page']=='edit-penilaian'){
          include('edit/edit_penilaian.php');
      }
      else if($_GET['page']=='perhitungan'){
        include('perhitungan.php');
      }
        else if($_GET['page']=='tentang'){
            include('tentang.php');
        }
        else if($_GET['page']=='petunjuk'){
            include('petunjuk.php');
        }
    }
    else{
        include('dashboard.php');
    }?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php');?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>
