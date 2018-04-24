<<<<<<< HEAD
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
		<form action="tambah.php" method="POST" class="well form-horizontal" id="contact_form" enctype="multipart/form-data"	>
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
								<input name="kode_berita" placeholder="Kode Berita" class="form-control" type="text" maxlength="" required>
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
								<input name="judul_berita" placeholder="Masukkan Judul" class="form-control" type="text" maxlength="100" required>
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
								<input name="subjudul_berita" placeholder="Masukkan Sub Judul" class="form-control" type="text" maxlength="100" required>
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
									<option value="Console">Game Console</option>
									<option value="Desktop">Game Desktop</option>
									<option value="Mobile">Game Mobile</option>
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
									<option value="Action">Action</option>
									<option value="Adventure">Adventure</option>
									<option value="RPG">RPG</option>
									<option value="Simulation">Simulation</option>
									<option value="Strategy">Strategy</option>
									<option value="Sports">Sports</option>
									<option value="IdleGaming">Idle Gaming</option>
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
								<textarea id="text" class="form-control" name="isi_berita" placeholder="Masukkan Berita" required=></textarea>
							</div>
						</div>
					</div>
				</tr>

				<tr>
					<div class="form-group">
						<label class="col-md-4 control-label">Foto : </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input name="FOTO" class="form-control" type="file" >
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
		<form action="tambah.php" method="POST" class="well form-horizontal" id="contact_form" enctype="multipart/form-data"	>
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
								<input name="kode_berita" placeholder="Kode Berita" class="form-control" type="text" maxlength="" required>
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
								<input name="judul_berita" placeholder="Masukkan Judul" class="form-control" type="text" maxlength="100" required>
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
								<input name="subjudul_berita" placeholder="Masukkan Sub Judul" class="form-control" type="text" maxlength="100" required>
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
									<option value="Console">Game Console</option>
									<option value="Desktop">Game Desktop</option>
									<option value="Mobile">Game Mobile</option>
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
									<option value="Action">Action</option>
									<option value="Adventure">Adventure</option>
									<option value="RPG">RPG</option>
									<option value="Simulation">Simulation</option>
									<option value="Strategy">Strategy</option>
									<option value="Sports">Sports</option>
									<option value="IdleGaming">Idle Gaming</option>
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
								<textarea id="text" class="form-control" name="isi_berita" placeholder="Masukkan Berita" required=></textarea>
							</div>
						</div>
					</div>
				</tr>

				<tr>
					<div class="form-group">
						<label class="col-md-4 control-label">Foto : </label>
						<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input name="FOTO" class="form-control" type="file" >
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
>>>>>>> 92c38813fa7c40fcaaedda6307bcef6f53108ad8
</html>