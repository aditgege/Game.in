<<<<<<< HEAD

<?php
include 'koneksi/koneksi.php';
include 'lib/lib.php';
session_start();

$query = mysqli_query($koneksi,"SELECT * FROM t_berita");

include 'views/v_databerita.php';
=======

<?php
include 'koneksi/koneksi.php';
include 'lib/lib.php';
session_start();

$query = mysqli_query($koneksi,"SELECT * FROM t_berita");

include 'views/v_databerita.php';
>>>>>>> 92c38813fa7c40fcaaedda6307bcef6f53108ad8
