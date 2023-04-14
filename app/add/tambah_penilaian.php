<?php
include('../../conf/config.php');
$id_penilaian = $_GET['id_penilaian'];
$alternatif = $_GET['alternatif'];
$kemampuan_kerjasama = $_GET['kemampuan_kerjasama'];
$presensi = $_GET['presensi'];
$kedisiplinan = $_GET['kedisiplinan'];
$penjualan = $_GET['penjualan'];
$lembur = $_GET['lembur'];

$query = mysqli_query($koneksi,"INSERT INTO tb_penilaian (id_penilaian,alternatif,kemampuan_kerjasama,presensi,kedisiplinan,penjualan,lembur) VALUES('$id_penilaian','$alternatif','$kemampuan_kerjasama','$presensi','$kedisiplinan','$penjualan','$lembur')");
	header('location: ../index.php?page=data_penilaian');

?> 