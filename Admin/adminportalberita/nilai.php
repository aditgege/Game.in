
<?php
    include "koneksi/koneksi.php";
    
    $query = mysqli_query($koneksi,"SELECT * FROM t_siswa INNER JOIN t_nilai ON t_siswa.NIS = t_nilai.NIS");
    
    include "views/v_nilai.php";

?>