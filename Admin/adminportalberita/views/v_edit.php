

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="views/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css">
	<script src="views/js/bootstrap.min.js"></script>
	<style type="text/css">
	body{
		background-color: rgba(0,0,0,0.35);
	}
	#manajemen{
		border-radius: 25px;
	}
</style>
</head>
<body onload="init();">
	<div class="container">
		<form action="edit.php?kode_berita=<?php echo $result['kode_berita']?>" method="POST" class="well form-horizontal" id="contact_form" enctype="multipart/form-data"	>
			<div class="header-content">
				<div id="manajemen" class="alert alert-warning">
					<center><h1>Tambah Berita</h1></center>
				</div>
			</div>
			<table>
				<tr>
					<div class="form-group">
						<label class="col-md-4 control-label">Kode Berita : </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input value="<?php echo $result['kode_berita']?>" name="kode_berita" placeholder="Kode Berita" class="form-control" type="text" maxlength="" required>
							</div>
						</div>
					</div>
				</tr>
				<tr>
					<div class="form-group">
						<label class="col-md-4 control-label">Judul : </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input value="<?= $result['judul']?>" name="judul_berita" placeholder="Masukkan Judul" class="form-control" type="text" maxlength="100" required>
							</div>
						</div>
					</div>
				</tr>

				<tr>
					<div class="form-group">
						<label class="col-md-4 control-label">Sub-Judul : </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input value="<?= $result['sub_judul']?>" name="subjudul_berita" placeholder="Masukkan Sub Judul" class="form-control" type="text" maxlength="100" required>
							</div>
						</div>
					</div>
				</tr>

				<tr>
					<div class="form-group">
						<label class="col-md-4 control-label">Kategori : </label>
						<div class="col-md-4 selectContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
								<select name="kategori" class="form-control selectpicker">
									<option value="" >Pilih Kategori</option>
									<option value="Console" <?php if ($result['kategori']=="Console") echo "selected"?> >Game Console</option>
									<option value="Desktop" <?php if ($result['kategori']=="Desktop") echo "selected"?> >Game Desktop</option>
									<option value="Mobile" <?php if ($result['kategori']=="Mobile") echo "selected"?> >Game Mobile</option>
								</select>
							</div>
						</div>
					</div>
				</tr>

				<tr>
					<div class="form-group">
						<label class="col-md-4 control-label">Genre : </label>
						<div class="col-md-4 selectContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
								<select name="genre" class="form-control selectpicker">
									<option value="" >Pilih Genre</option>
									<option value="Action" <?php if ($result['genre']=="Action") echo "selected"?> >Action</option>
									<option value="Adventure" <?php if ($result['genre']=="Adventure") echo "selected"?>>Adventure</option>
									<option value="RPG" <?php if ($result['genre']=="RPG") echo "selected"?>>RPG</option>
									<option value="Simulation" <?php if ($result['genre']=="Simulation") echo "selected"?>>Simulation</option>
									<option value="Strategy" <?php if ($result['genre']=="Strategy") echo "selected"?>>Strategy</option>
									<option value="Sports" <?php if ($result['genre']=="Sports") echo "selected"?>>Sports</option>
									<option value="IdleGaming" <?php if ($result['genre']=="IdleGaming") echo "selected"?>>Idle Gaming</option>
								</select>
							</div>
						</div>
					</div>
				</tr>

				<tr>
					<div class="form-group">
						<label class="col-md-4 control-label">Isi Berita : </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group" >
								<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
								<textarea id="text" class="form-control" name="isi_berita" placeholder="Masukkan Berita" required><?=$result['isi_berita']?></textarea>
							</div>
						</div>
					</div>
				</tr>

				<tr>
					<div class="form-group">
						<label class="col-md-4 control-label">Foto : </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								
								<input name="FOTO" class="form-control" type="file" >
								<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
							</div>
						</div>
					</div>
				</tr>
				<tr>
					<div class="form-group" style="margin-left : 500px";>
						<label class="control-label"></label>
						<div class="col-md-4">
							<button type="submit" class="btn btn-danger" value="submit">Submit <span class="glyphicon glyphicon-send"></span></button>
						</div>
					</div>
				</tr>
			</table>
		</form>
	</div>
</body>
<script type="text/javascript">
	var observe;
	if (window.attachEvent) {
		observe = function (element, event, handler) {
			element.attachEvent('on'+event, handler);
		};
	}
	else {
		observe = function (element, event, handler) {
			element.addEventListener(event, handler, false);
		};
	}
	function init () {
		var text = document.getElementById('text');
		function resize () {
			text.style.height = 'auto';
			text.style.height = text.scrollHeight+'px';
		}
		/* 0-timeout to get the already changed text */
		function delayedResize () {
			window.setTimeout(resize, 0);
		}
		observe(text, 'change',  resize);
		observe(text, 'cut',     delayedResize);
		observe(text, 'paste',   delayedResize);
		observe(text, 'drop',    delayedResize);
		observe(text, 'keydown', delayedResize);

		text.focus();
		text.select();
		resize();
	}
=======

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="views/js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css">
	<script src="views/js/bootstrap.min.js"></script>
	<style type="text/css">
	body{
		background-color: rgba(0,0,0,0.35);
	}
	#manajemen{
		border-radius: 25px;
	}
</style>
</head>
<body onload="init();">
	<div class="container">
		<form action="edit.php?kode_berita=<?php echo $result['kode_berita']?>" method="POST" class="well form-horizontal" id="contact_form" enctype="multipart/form-data"	>
			<div class="header-content">
				<div id="manajemen" class="alert alert-warning">
					<center><h1>Tambah Berita</h1></center>
				</div>
			</div>
			<table>
				<tr>
					<div class="form-group">
						<label class="col-md-4 control-label">Kode Berita : </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input value="<?php echo $result['kode_berita']?>" name="kode_berita" placeholder="Kode Berita" class="form-control" type="text" maxlength="" required>
							</div>
						</div>
					</div>
				</tr>
				<tr>
					<div class="form-group">
						<label class="col-md-4 control-label">Judul : </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input value="<?= $result['judul']?>" name="judul_berita" placeholder="Masukkan Judul" class="form-control" type="text" maxlength="100" required>
							</div>
						</div>
					</div>
				</tr>

				<tr>
					<div class="form-group">
						<label class="col-md-4 control-label">Sub-Judul : </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input value="<?= $result['sub_judul']?>" name="subjudul_berita" placeholder="Masukkan Sub Judul" class="form-control" type="text" maxlength="100" required>
							</div>
						</div>
					</div>
				</tr>

				<tr>
					<div class="form-group">
						<label class="col-md-4 control-label">Kategori : </label>
						<div class="col-md-4 selectContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
								<select name="kategori" class="form-control selectpicker">
									<option value="" >Pilih Kategori</option>
									<option value="Console" <?php if ($result['kategori']=="Console") echo "selected"?> >Game Console</option>
									<option value="Desktop" <?php if ($result['kategori']=="Desktop") echo "selected"?> >Game Desktop</option>
									<option value="Mobile" <?php if ($result['kategori']=="Mobile") echo "selected"?> >Game Mobile</option>
								</select>
							</div>
						</div>
					</div>
				</tr>

				<tr>
					<div class="form-group">
						<label class="col-md-4 control-label">Genre : </label>
						<div class="col-md-4 selectContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
								<select name="genre" class="form-control selectpicker">
									<option value="" >Pilih Genre</option>
									<option value="Action" <?php if ($result['genre']=="Action") echo "selected"?> >Action</option>
									<option value="Adventure" <?php if ($result['genre']=="Adventure") echo "selected"?>>Adventure</option>
									<option value="RPG" <?php if ($result['genre']=="RPG") echo "selected"?>>RPG</option>
									<option value="Simulation" <?php if ($result['genre']=="Simulation") echo "selected"?>>Simulation</option>
									<option value="Strategy" <?php if ($result['genre']=="Strategy") echo "selected"?>>Strategy</option>
									<option value="Sports" <?php if ($result['genre']=="Sports") echo "selected"?>>Sports</option>
									<option value="IdleGaming" <?php if ($result['genre']=="IdleGaming") echo "selected"?>>Idle Gaming</option>
								</select>
							</div>
						</div>
					</div>
				</tr>

				<tr>
					<div class="form-group">
						<label class="col-md-4 control-label">Isi Berita : </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group" >
								<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
								<textarea id="text" class="form-control" name="isi_berita" placeholder="Masukkan Berita" required><?=$result['isi_berita']?></textarea>
							</div>
						</div>
					</div>
				</tr>

				<tr>
					<div class="form-group">
						<label class="col-md-4 control-label">Foto : </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								
								<input name="FOTO" class="form-control" type="file" >
								<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
							</div>
						</div>
					</div>
				</tr>
				<tr>
					<div class="form-group" style="margin-left : 500px";>
						<label class="control-label"></label>
						<div class="col-md-4">
							<button type="submit" class="btn btn-danger" value="submit">Submit <span class="glyphicon glyphicon-send"></span></button>
						</div>
					</div>
				</tr>
			</table>
		</form>
	</div>
</body>
<script type="text/javascript">
	var observe;
	if (window.attachEvent) {
		observe = function (element, event, handler) {
			element.attachEvent('on'+event, handler);
		};
	}
	else {
		observe = function (element, event, handler) {
			element.addEventListener(event, handler, false);
		};
	}
	function init () {
		var text = document.getElementById('text');
		function resize () {
			text.style.height = 'auto';
			text.style.height = text.scrollHeight+'px';
		}
		/* 0-timeout to get the already changed text */
		function delayedResize () {
			window.setTimeout(resize, 0);
		}
		observe(text, 'change',  resize);
		observe(text, 'cut',     delayedResize);
		observe(text, 'paste',   delayedResize);
		observe(text, 'drop',    delayedResize);
		observe(text, 'keydown', delayedResize);

		text.focus();
		text.select();
		resize();
	}

</script>