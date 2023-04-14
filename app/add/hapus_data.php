<?php
include('../../conf/config.php');
$id_pegawai = $_GET['id_pegawai'];

$query = mysqli_query($koneksi,"DELETE FROM tb_alternatif WHERE id_pegawai='$id_pegawai'");
	header('location: ../index.php?page=data_alternatif');

?>   