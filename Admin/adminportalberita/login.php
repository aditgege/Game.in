<<<<<<< HEAD
<?php
include 'koneksi/koneksi.php';
include 'lib/lib.php';
session_start();
cekLogin();

sudahLogin();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
 $username = $_POST['username'];
 $password = $_POST['password'];

 $sql = "SELECT * FROM t_admin
 WHERE username = '$username'
 AND password = md5('$password')";

 $data = $koneksi->query($sql) or die ($koneksi->error);

 if($data->num_rows != 0) {
  $row = mysqli_fetch_object($data);
  $_SESSION['username'] = $row->username;
  header('location:index.php');
}else{
  $error = "Username atau password salah";
}
}
include "views/v_login.php";
?>
=======
<?php
include 'koneksi/koneksi.php';
include 'lib/lib.php';
session_start();
cekLogin();

sudahLogin();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
 $username = $_POST['username'];
 $password = $_POST['password'];

 $sql = "SELECT * FROM t_admin
 WHERE username = '$username'
 AND password = md5('$password')";

 $data = $koneksi->query($sql) or die ($koneksi->error);

 if($data->num_rows != 0) {
  $row = mysqli_fetch_object($data);
  $_SESSION['username'] = $row->username;
  header('location:index.php');
}else{
  $error = "Username atau password salah";
}
}
include "views/v_login.php";
?>
>>>>>>> 92c38813fa7c40fcaaedda6307bcef6f53108ad8
