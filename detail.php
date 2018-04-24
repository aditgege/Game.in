<?php  
include 'adminportalberita/koneksi/koneksi.php';

$kode_berita = $_GET['kode_berita'];
$query = mysqli_query($koneksi,"SELECT * FROM t_berita WHERE kode_berita='$kode_berita'");
$result = mysqli_fetch_array($query);
	include('Views/v_detail.php');
?>