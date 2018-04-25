
<?php
	include 'koneksi/koneksi.php';

	$kode_berita = $_GET['kode_berita'];
	$query = mysqli_query($koneksi,"SELECT * FROM t_berita WHERE kode_berita='$kode_berita'");
	$result = mysqli_fetch_array($query);

		if(is_file("images/".$result['FOTO'])) // Jika foto ada
			unlink("images/".$result['FOTO']); // Hapus foto yang telah diupload dari folder images
	$query2= "DELETE FROM t_berita WHERE kode_berita ='$kode_berita'";


	if(mysqli_query($koneksi,$query2)){
			echo 1;	
		} else{
			echo 0;
		}
	

?>