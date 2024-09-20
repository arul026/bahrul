<?php
include "koneksi.php";
$id_jenislaundry=$_GET['id_jenislaundry'];
$query=mysqli_query($koneksi,"delete from jenis_laundry where id_jenislaundry='$id_jenislaundry'");
header('location:?page=jenis_laundry/index');

?>