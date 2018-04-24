
<?php
include 'koneksi/koneksi.php';
include 'lib/lib.php';
session_start();

$query = mysqli_query($koneksi,"SELECT * FROM t_berita");

include 'views/v_databerita.php';
