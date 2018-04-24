<<<<<<< HEAD
<html>
<head>
    <title>Daftar Nilai</title>
    <link href="views/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="views/fonts/" rel="stylesheet" type="text/css">
    <link href="views/media/plugins/toastr/toastr.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <h1>Data Siswa <a class="btn btn-sm btn-success pull-right" href="tambahnilai.php">Tambah</a></h1>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Nilai</th>
                        <th>Mata Pelajaran</th>
                        <th>Semester</th>
                        <th>Tahun Ajaran</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            while ($result = mysqli_fetch_array($query)):
                        ?>
                        <tr>
                            <td width="5%">
                                <?= $result['NIS'] ?>
                            </td>
                            <td width="20%">
                                <?= $result['nama'] ?>
                            </td>
                            <td>
                                <?= $result['kelas'] ?>
                            </td>
                            <td>
                                <?= $result['nilai'] ?>
                            </td>
                            <td>
                                <?= $result['matpel'] ?>
                            </td>
                            <td>
                                <?= $result['semester'] ?>
                            </td>
                            <td>
                                <?= $result['thnajaran'] ?>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="editnilai.php?id=<?= $result->idnilai ?>"><span class="glyphicon glyphicon-edit"></span></a>
                                <button class="btn btn-danger btnDelete" href="deletenilai.php?id=<?= $result->idnilai ?>" data-ket="<?= $result->matpel.' '.$result->NAMA ?>"><span class="glyphicon glyphicon-trash"></span></button>
                            </td>
                        </tr>
                        <?php
                            endwhile;
                        ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="modal-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Konfirmasi</h4>
                </div>
                <div class="modal-body">
                    <p>Anda yakin ingin menghapus nilai <b class="namanya"></b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btnok">Iya</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="views/media/js/jquery.min.js"></script>
<script src="views/js/bootstrap.min.js"></script>
<script src="views/media/plugins/toastr/toastr.min.js"></script>

<script>
    $('.btnDelete').on('click', function(e) {
        e.preventDefault();
        var nama = $(this).attr('data-ket');
        $('#modal-delete .namanya').html(nama);
        $('#modal-delete').modal('toggle');
        var lokasi = $(this).attr('href');
        var id = $(this).attr('data-con');
        $('.btnok').on('click', function(e) {
            $.post(lokasi,
                function(data, status) {
                    $('#modal-delete').modal('toggle');
                    $("#" + id).fadeOut();
                    $("#" + id).remove();
                    toastr.success("Data Berhasil Di Hapus", "Informasi");
                });
        })
    });
</script>
</body>

=======
<html>
<head>
    <title>Daftar Nilai</title>
    <link href="views/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="views/fonts/" rel="stylesheet" type="text/css">
    <link href="views/media/plugins/toastr/toastr.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <h1>Data Siswa <a class="btn btn-sm btn-success pull-right" href="tambahnilai.php">Tambah</a></h1>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Nilai</th>
                        <th>Mata Pelajaran</th>
                        <th>Semester</th>
                        <th>Tahun Ajaran</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            while ($result = mysqli_fetch_array($query)):
                        ?>
                        <tr>
                            <td width="5%">
                                <?= $result['NIS'] ?>
                            </td>
                            <td width="20%">
                                <?= $result['nama'] ?>
                            </td>
                            <td>
                                <?= $result['kelas'] ?>
                            </td>
                            <td>
                                <?= $result['nilai'] ?>
                            </td>
                            <td>
                                <?= $result['matpel'] ?>
                            </td>
                            <td>
                                <?= $result['semester'] ?>
                            </td>
                            <td>
                                <?= $result['thnajaran'] ?>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="editnilai.php?id=<?= $result->idnilai ?>"><span class="glyphicon glyphicon-edit"></span></a>
                                <button class="btn btn-danger btnDelete" href="deletenilai.php?id=<?= $result->idnilai ?>" data-ket="<?= $result->matpel.' '.$result->NAMA ?>"><span class="glyphicon glyphicon-trash"></span></button>
                            </td>
                        </tr>
                        <?php
                            endwhile;
                        ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="modal-delete">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Konfirmasi</h4>
                </div>
                <div class="modal-body">
                    <p>Anda yakin ingin menghapus nilai <b class="namanya"></b></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btnok">Iya</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="views/media/js/jquery.min.js"></script>
<script src="views/js/bootstrap.min.js"></script>
<script src="views/media/plugins/toastr/toastr.min.js"></script>

<script>
    $('.btnDelete').on('click', function(e) {
        e.preventDefault();
        var nama = $(this).attr('data-ket');
        $('#modal-delete .namanya').html(nama);
        $('#modal-delete').modal('toggle');
        var lokasi = $(this).attr('href');
        var id = $(this).attr('data-con');
        $('.btnok').on('click', function(e) {
            $.post(lokasi,
                function(data, status) {
                    $('#modal-delete').modal('toggle');
                    $("#" + id).fadeOut();
                    $("#" + id).remove();
                    toastr.success("Data Berhasil Di Hapus", "Informasi");
                });
        })
    });
</script>
</body>

>>>>>>> 92c38813fa7c40fcaaedda6307bcef6f53108ad8
</html>