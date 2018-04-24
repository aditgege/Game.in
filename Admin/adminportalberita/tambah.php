<?php
	include 'koneksi/koneksi.php';
	include 'views/v_form.php';
		$kode_berita = @$_POST['kode_berita'];
		$judul_berita = @$_POST['judul_berita'];
		$subjudul_berita = @$_POST['subjudul_berita'];
		$kategori = @$_POST['kategori'];
		$genre = @$_POST['genre'];
		$isi_berita = @$_POST['isi_berita'];
		$FOTO = @$_FILES['FOTO']['name'];
		$tmp = @$_FILES['FOTO']['tmp_name'];

		$fotobaru = date('dmYHis').$FOTO;

		// Set path folder tempat menyimpan fotonya
		$path = "images/".$fotobaru;

		// Proses upload
		if(move_uploaded_file($tmp, $path)){

		$query="INSERT INTO t_berita VALUES ('$kode_berita','$judul_berita','$subjudul_berita','$kategori','$genre','$isi_berita','$fotobaru')";

		if(mysqli_query($koneksi,$query)){
			header("location:index.php");
		} else{
			echo '<script type="text/javascript">alert("Data gagal ditambahkan");</script>';
		}
	}
?>