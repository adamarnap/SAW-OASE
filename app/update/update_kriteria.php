<?php
include('../../conf/config.php');
$id_kriteria = $_GET['id_kriteria'];
$kriteria = $_GET['kriteria'];
$bobot = $_GET['bobot'];
$query = mysqli_query($koneksi,"UPDATE tb_kriteria SET kriteria='$kriteria',bobot='$bobot' WHERE id_kriteria='$id_kriteria'");
	header('location: ../index.php?page=data_kriteria');

?>   