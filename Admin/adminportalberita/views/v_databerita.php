<<<<<<< HEAD
<head>
<script src="views/js/jquery.js"></script>
<script src="views/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="views/media/plugins/toastr/toastr.min.css">
<script type="text/javascript" src="views/media/plugins/toastr/toastr.min.js"></script>
<style type="text/css">
	body{

	}
	table#mytable {
		width: 75%;
		margin: auto;
		border: 1px solid #F9F9F9;
	}

	.page-header {
		text-align: center;
	}
	.form-group {
		position : absolute;
    	right: 300px;
	}
</style>
</head>
<body>
<div class="page-header">
	<h1>Data Berita</h1>
	<a href="tambah.php" <button type="submit" class="btn btn-primary" value="submit" style="float:left;margin-left:80px;">Tambah  <span class="glyphicon glyphicon-pencil"></span></button></a>
	<a href="logout.php" <button type="submit" class="btn btn-info" value="submit" style="float:right;margin-right:80px;">Logout  <span class="glyphicon glyphicon-user"></span></button></a>
</div>
<div class="col-md-12">
	<div class="table-responsive">
		<table id="mytable" class="table table-bordred table-striped">
			<thead>
				<tr>
					<th>Kode Berita</th>
					<th>Foto</th>
					<th>Judul</th>
					<th>Sub Judul</th>
					<th>Kategori</th>
					<th>Genre</th>
					<th>Berita</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody>
				<?php
			while ($result = mysqli_fetch_object($query)) {
				?>
				<tr>
					<td>
						<?= $result->kode_berita?>
					</td>
					<td><center><img style="border-radius:50px;" src="images/<?= $result->FOTO ?>" width="100" height="100"></center></td>
					<td>
						<?= $result->judul?>
					</td>
					<td>
						<?= $result->sub_judul?>
					</td>
					<td>
						<?= $result->kategori?>
					</td>
					<td>
						<?= $result->genre?>
					</td>
					<td>
						<?= $result->isi_berita?>
					</td>
					<td><a href="edit.php?kode_berita=<?php echo $result->kode_berita?>"class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;|&nbsp;
						<a href="delete.php?kode_berita=<?php echo $result->kode_berita?>"class="btn btn-danger btnDelete"><i class="glyphicon glyphicon-trash"></i></a></td>
				</tr>
				<?php
			}
		?>
			</tbody>
		</table>
		<br>
	</div>
</div>
<div class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"></h4>
			</div>

			<div class="modal-body"></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary btnYa">Ya</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		$(".btnDelete").on("click",function(e){
			e.preventDefault();

			var nama = $(this).parent().parent().children()[2];
			nama = $(nama).html();

			var tr = $(this).parent().parent();

			$(".modal").modal('show');
			$(".modal-title").html('konfirmasi');
			$(".modal-body").html('Anda yakin ingin menghapus data <b>' + nama +' ? </br>');

			var href= $(this).attr('href');

			$('.btnYa').off();
			$('.btnYa').on('click',function(){
				$.ajax({
					'url' : href,
					'type' : 'POST',
					'success' : function(result){
						if (result==1) {
							$(".modal").modal('hide');
							tr.fadeOut();

							toastr.success('Data berhasil dihapus','Informasi');
						}
					}
				});
			});
		});
	});
</script>
</body>
=======
<head>
<script src="views/js/jquery.js"></script>
<script src="views/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="views/media/plugins/toastr/toastr.min.css">
<script type="text/javascript" src="views/media/plugins/toastr/toastr.min.js"></script>
<style type="text/css">
	body{

	}
	table#mytable {
		width: 75%;
		margin: auto;
		border: 1px solid #F9F9F9;
	}

	.page-header {
		text-align: center;
	}
	.form-group {
		position : absolute;
    	right: 300px;
	}
</style>
</head>
<body>
<div class="page-header">
	<h1>Data Berita</h1>
	<a href="tambah.php" <button type="submit" class="btn btn-primary" value="submit" style="float:left;margin-left:80px;">Tambah  <span class="glyphicon glyphicon-pencil"></span></button></a>
	<a href="logout.php" <button type="submit" class="btn btn-info" value="submit" style="float:right;margin-right:80px;">Logout  <span class="glyphicon glyphicon-user"></span></button></a>
</div>
<div class="col-md-12">
	<div class="table-responsive">
		<table id="mytable" class="table table-bordred table-striped">
			<thead>
				<tr>
					<th>Kode Berita</th>
					<th>Foto</th>
					<th>Judul</th>
					<th>Sub Judul</th>
					<th>Kategori</th>
					<th>Genre</th>
					<th>Berita</th>
					<th>ACTION</th>
				</tr>
			</thead>
			<tbody>
				<?php
			while ($result = mysqli_fetch_object($query)) {
				?>
				<tr>
					<td>
						<?= $result->kode_berita?>
					</td>
					<td><center><img style="border-radius:50px;" src="images/<?= $result->FOTO ?>" width="100" height="100"></center></td>
					<td>
						<?= $result->judul?>
					</td>
					<td>
						<?= $result->sub_judul?>
					</td>
					<td>
						<?= $result->kategori?>
					</td>
					<td>
						<?= $result->genre?>
					</td>
					<td>
						<?= $result->isi_berita?>
					</td>
					<td><a href="edit.php?kode_berita=<?php echo $result->kode_berita?>"class="btn btn-warning"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;|&nbsp;
						<a href="delete.php?kode_berita=<?php echo $result->kode_berita?>"class="btn btn-danger btnDelete"><i class="glyphicon glyphicon-trash"></i></a></td>
				</tr>
				<?php
			}
		?>
			</tbody>
		</table>
		<br>
	</div>
</div>
<div class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title"></h4>
			</div>

			<div class="modal-body"></div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary btnYa">Ya</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function(){
		$(".btnDelete").on("click",function(e){
			e.preventDefault();

			var nama = $(this).parent().parent().children()[2];
			nama = $(nama).html();

			var tr = $(this).parent().parent();

			$(".modal").modal('show');
			$(".modal-title").html('konfirmasi');
			$(".modal-body").html('Anda yakin ingin menghapus data <b>' + nama +' ? </br>');

			var href= $(this).attr('href');

			$('.btnYa').off();
			$('.btnYa').on('click',function(){
				$.ajax({
					'url' : href,
					'type' : 'POST',
					'success' : function(result){
						if (result==1) {
							$(".modal").modal('hide');
							tr.fadeOut();

							toastr.success('Data berhasil dihapus','Informasi');
						}
					}
				});
			});
		});
	});
</script>
</body>
>>>>>>> 92c38813fa7c40fcaaedda6307bcef6f53108ad8
