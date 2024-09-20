<?php
include "koneksi.php";
$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$telepon=$_POST['telepon'];
$query=mysqli_query($koneksi,"insert into member(id,nama,alamat,jenis_kelamin,telepon) values('$id','$nama','$alamat','$jenis_kelamin','$telepon')");
header('location:?page=member/index');
?>