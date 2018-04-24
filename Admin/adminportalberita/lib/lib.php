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

?>