<?php
include('../../conf/config.php');
$nip = $_GET['nip'];
$nama = $_GET['nama'];
$jabatan = $_GET['jabatan'];
$bagian = $_GET['bagian'];
$tanggal_masuk = $_GET['tanggal_masuk'];
$query = mysqli_query($koneksi,"INSERT INTO tb_alternatif (id_pegawai,nip,nama,jabatan,bagian,tanggal_masuk) VALUES(0,'$nip','$nama','$jabatan','$bagian','$tanggal_masuk')");
	header('location: ../index.php?page=data_alternatif');

?>   