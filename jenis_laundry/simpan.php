<?php
include "koneksi.php";
$id_jenislaundry=$_POST['id_jenislaundry'];
$jenis_laundry=$_POST['jenis_laundry'];
$nama_paket=$_POST['nama_paket'];
$harga=$_POST['harga'];
$tlp=$_POST['tlp'];
$query=mysqli_query($koneksi,"insert into jenis_laundry(id_jenislaundry,jenis_laundry,nama_paket,harga) values('$id_jenislaundry','$jenis_laundry','$nama_paket','$harga')");
header('location:?page=jenis_laundry/index');
?>