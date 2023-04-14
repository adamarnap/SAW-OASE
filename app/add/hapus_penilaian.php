<?php
include('../../conf/config.php');
$id_penilaian = $_GET['id_penilaian'];

$query = mysqli_query($koneksi,"DELETE FROM tb_penilaian WHERE id_penilaian='$id_penilaian'");
	header('location: ../index.php?page=data_penilaian');

?>   