<?php
include "koneksi.php";
$id=$_GET['id'];
$query=mysqli_query($koneksi,"delete from member where id='$id'");
header('location:?page=member/index');

?>