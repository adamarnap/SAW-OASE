<?php
include('../../conf/config.php');
$id_penilaian = $_GET['id_penilaian'];
$alternatif = $_GET['alternatif'];
$kemampuan_kerjasama = $_GET['kemampuan_kerjasama'];
$presensi = $_GET['presensi'];
$kedisiplinan = $_GET['kedisiplinan'];
$penjualan = $_GET['penjualan'];
$lembur = $_GET['lembur'];
$query = mysqli_query($koneksi,"UPDATE tb_penilaian SET alternatif='$alternatif',kemampuan_kerjasama='$kemampuan_kerjasama',presensi='$presensi',kedisiplinan='$kedisiplinan',penjualan='$penjualan',lembur='$lembur' WHERE id_penilaian='$id_penilaian'");
	header('location: ../index.php?page=data_penilaian');

?>  