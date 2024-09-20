<?php
include "koneksi.php";
$id_user=$_POST['id_user'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];
$query=mysqli_query($koneksi,"update user set nama='$nama',username='$username',password='$password',level='$level' where id_user='$id_user'");
header('location:?page=user/index');
?>