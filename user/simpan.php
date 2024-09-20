<?php
include "koneksi.php";
$id_user=$_POST['id_user'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];
$query=mysqli_query($koneksi,"insert into user(id_user,nama,username,password,level) values('$id_user','$nama','$username','$password','$level')");
header('location:?page=user/index');
?>