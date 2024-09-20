<?php
include "koneksi.php";
$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$telepon=$_POST['telepon'];
$query=mysqli_query($koneksi,"update member set nama='$nama',alamat='$alamat',jenis_kelamin='$jenis_kelamin',telepon='$telepon' where id='$id'");
header('location:?page=member/index');
?>