<?php
include 'koneksi/koneksi.php';


$kode_berita = $_GET['kode_berita'];
$query = mysqli_query($koneksi,"SELECT * FROM t_berita WHERE kode_berita='$kode_berita'");
$result = mysqli_fetch_array($query);

if ($_SERVER['REQUEST_METHOD']=="POST") {
	$judul_berita = @$_POST['judul_berita'];
	$subjudul_berita = @$_POST['subjudul_berita'];
	$kategori = @$_POST['kategori'];
	$genre = @$_POST['genre'];
	$isi_berita = @$_POST['isi_berita'];
	

	if(isset($_POST['ubah_foto'])){ // Jika user menceklis checkbox yang ada di form ubah, lakukan :
	// Ambil data foto yang dipilih dari form
		$FOTO = $_FILES['FOTO']['name'];
		$tmp = $_FILES['FOTO']['tmp_name'];

	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
		$fotobaru = date('dmYHis').$FOTO;

	// Set path folder tempat menyimpan fotonya
		$path = "images/".$fotobaru;
	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak

		//Cek apakah file foto sebelumnya ada di folder images
		if(is_file("images/".$result['FOTO'])) // Jika foto ada
			unlink("images/".$result['FOTO']); // Hapus file foto sebelumnya yang ada di folder images

			$query1="UPDATE t_berita SET  judul='$judul_berita', sub_judul='$subjudul_berita', kategori='$kategori', genre='$genre', isi_berita='$isi_berita',FOTO='$fotobaru' WHERE kode_berita='$kode_berita'";

			if (mysqli_query($koneksi,$query1)) {
				header("location:index.php");
				'<script type="text/javascript">alert("Data berhasil edit");</script>';
			}else{
				echo '<script type="text/javascript">alert("Data gagal edit");</script>';
			}
		}
	}
	else{
		$query1="UPDATE t_berita SET  judul='$judul_berita', sub_judul='$subjudul_berita', kategori='$kategori', genre='$genre', isi_berita='$isi_berita' WHERE kode_berita='$kode_berita'";

		if (mysqli_query($koneksi,$query1)) {
			header("location:index.php");
			'<script type="text/javascript">alert("Data berhasil edit");</script>';
		}else{
			echo '<script type="text/javascript">alert("Data gagal edit");</script>';
		}
	}
}
include 'views/v_edit.php';
?>