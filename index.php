<?=
include 'adminportalberita/koneksi/koneksi.php';
$query = mysqli_query($koneksi,"SELECT * FROM t_berita");
include 'Views/v_index.php'; 
?>