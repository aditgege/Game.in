<<<<<<< HEAD
<?php
    include "koneksi/koneksi.php";
    
    $query = mysqli_query($koneksi,"SELECT * FROM t_siswa INNER JOIN t_nilai ON t_siswa.NIS = t_nilai.NIS");
    
    include "views/v_nilai.php";
=======
<?php
    include "koneksi/koneksi.php";
    
    $query = mysqli_query($koneksi,"SELECT * FROM t_siswa INNER JOIN t_nilai ON t_siswa.NIS = t_nilai.NIS");
    
    include "views/v_nilai.php";
>>>>>>> 92c38813fa7c40fcaaedda6307bcef6f53108ad8
?>