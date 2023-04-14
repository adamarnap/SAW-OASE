<?php
include('../../conf/config.php');
$id_kriteria = $_GET['id_kriteria'];

$query = mysqli_query($koneksi,"DELETE FROM tb_kriteria WHERE id_kriteria='$id_kriteria'");
	header('location: ../index.php?page=data_kriteria');

?>   