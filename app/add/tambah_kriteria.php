<?php
include('../../conf/config.php');
$kriteria = $_GET['kriteria'];
$bobot = $_GET['bobot'];
$query = mysqli_query($koneksi,"INSERT INTO tb_kriteria (id_kriteria,kriteria,bobot) VALUES(0,'$kriteria','$bobot')");
	header('location: ../index.php?page=data_kriteria');

?>   

