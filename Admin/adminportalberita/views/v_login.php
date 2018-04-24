<<<<<<< HEAD
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="views/css/index.css">
	<script src="js/bootstrap.min.js"></script>
	<style type="text/css">
	body{
		background-color: rgba(0,0,0,0.15);
	}
	.page-form{
		margin-top: 100px;
		margin-left: 400px;
		text-align: center;
		width:350px;
		background-color:whitesmoke;
		z-index: 1;
		border-radius: 15px;
	}

	.form{
		padding: 25px;
	}

	#manajemen{
		border-radius: 10px;
		margin-bottom: 40px;
	}

	#body{
		background-size: 100%;
	}

	.overlay{
		width: 100%;
		height: 100%;
		background-color: rgba(0,0,0,0.4);
		background-size: 100%;
		position: fixed;
		z-index: -1;
	}
	.textInput{
		margin-bottom: 30px;
		padding: 25px;
		padding-left: 5px;
		background-color: transparent;
		border: none;
		border-radius: 0px;
		border-bottom: 2px solid rgba(0,0,0,0.4) ;
		box-shadow: none;
	}
	.btn-login{
		width: 300px;
		height: 50px;
		background-color: yellow;

	}
</style>

</head>
<body id="body" background="images/bg.jpg">
	<div class="overlay"></div>
	<div class="container" >
		<div id="change-transitions" class="page-form" >
			<form action="login.php" method="POST" class="form">
				<div class="header-content">
					<div id="manajemen">
						<center><img src="images/logo.png" width="130px" height="70px"></center>
					</div>
				</div>
				<div class="body-content" >
					<div class="form-group">
						<div class="input-icon right">
							<i class="mi person form-icon"></i>
							<input type="text" placeholder="Username" name="username" value="" class="form-control textInput" required="">
						</div>
					</div>
					<div class="form-group">
						<div class="input-icon right">
							<i class="mi lock"></i>
							<input type="password" placeholder="Password" name="password" class="form-control textInput" required="">
						</div>
					</div>
					<div class="form-group pull-right">
						<button type="submit"  value="Login" class="btn btn-login">Login &nbsp;<i class="mi arrow_forward"></i></button>
					</div>
					<div class="clearfix"></div>
					<hr>
					<p class="small text-center">&copy; 2017 Game.in</p>
				</div>
			</form>
		</div>
	</div>
</body>
=======
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="views/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="views/css/index.css">
	<script src="js/bootstrap.min.js"></script>
	<style type="text/css">
	body{
		background-color: rgba(0,0,0,0.15);
	}
	.page-form{
		margin-top: 100px;
		margin-left: 400px;
		text-align: center;
		width:350px;
		background-color:whitesmoke;
		z-index: 1;
		border-radius: 15px;
	}

	.form{
		padding: 25px;
	}

	#manajemen{
		border-radius: 10px;
		margin-bottom: 40px;
	}

	#body{
		background-size: 100%;
	}

	.overlay{
		width: 100%;
		height: 100%;
		background-color: rgba(0,0,0,0.4);
		background-size: 100%;
		position: fixed;
		z-index: -1;
	}
	.textInput{
		margin-bottom: 30px;
		padding: 25px;
		padding-left: 5px;
		background-color: transparent;
		border: none;
		border-radius: 0px;
		border-bottom: 2px solid rgba(0,0,0,0.4) ;
		box-shadow: none;
	}
	.btn-login{
		width: 300px;
		height: 50px;
		background-color: yellow;

	}
</style>

</head>
<body id="body" background="images/bg.jpg">
	<div class="overlay"></div>
	<div class="container" >
		<div id="change-transitions" class="page-form" >
			<form action="login.php" method="POST" class="form">
				<div class="header-content">
					<div id="manajemen">
						<center><img src="images/logo.png" width="130px" height="70px"></center>
					</div>
				</div>
				<div class="body-content" >
					<div class="form-group">
						<div class="input-icon right">
							<i class="mi person form-icon"></i>
							<input type="text" placeholder="Username" name="username" value="" class="form-control textInput" required="">
						</div>
					</div>
					<div class="form-group">
						<div class="input-icon right">
							<i class="mi lock"></i>
							<input type="password" placeholder="Password" name="password" class="form-control textInput" required="">
						</div>
					</div>
					<div class="form-group pull-right">
						<button type="submit"  value="Login" class="btn btn-login">Login &nbsp;<i class="mi arrow_forward"></i></button>
					</div>
					<div class="clearfix"></div>
					<hr>
					<p class="small text-center">&copy; 2017 Game.in</p>
				</div>
			</form>
		</div>
	</div>
</body>
>>>>>>> 92c38813fa7c40fcaaedda6307bcef6f53108ad8
