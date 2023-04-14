<?php
include('../../conf/config.php');
$id_pegawai = $_GET['id_pegawai'];
$nip = $_GET['nip'];
$nama = $_GET['nama'];
$jabatan = $_GET['jabatan'];
$bagian = $_GET['bagian'];
$tanggal_masuk = $_GET['tanggal_masuk'];
$query = mysqli_query($koneksi,"UPDATE tb_alternatif SET nip='$nip',nama='$nama',jabatan='$jabatan',bagian='$bagian',tanggal_masuk='$tanggal_masuk' WHERE id_pegawai='$id_pegawai'");
	header('location: ../index.php?page=data_alternatif');

?>   