<<<<<<< HEAD
<?php
include 'koneksi/koneksi.php';

function cekLogin(){
	$username = @$_SESSION['username'];

	if (empty($username) AND empty($level)) {
		header("location:login.php");
	}
}

function sudahLogin(){
	$username =@$_SESSION['username'];

	if (!empty($username) AND !empty($level)) {
		header("location:index.php");
	}
}

=======
<?php
include 'koneksi/koneksi.php';

function cekLogin(){
	$username = @$_SESSION['username'];

	if (empty($username) AND empty($level)) {
		header("location:login.php");
	}
}

function sudahLogin(){
	$username =@$_SESSION['username'];

	if (!empty($username) AND !empty($level)) {
		header("location:index.php");
	}
}

>>>>>>> 92c38813fa7c40fcaaedda6307bcef6f53108ad8
?>