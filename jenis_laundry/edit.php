<?php
include "koneksi.php";
$id_jenislaundry=$_GET['id_jenislaundry'];
$query=mysqli_query($koneksi,"select * from jenis_laundry where id_jenislaundry='$id_jenislaundry'");
$data=mysqli_fetch_array($query);
?>

<div class="container">
<h1>Edit Data</h1>
<form action="?page=jenis_laundry/update " method="POST" >
<div class="form-group">
          <label for="id_jenislaundry">Id_jenislaundry:</label>
          <input type="text" class="form-control" name="id_jenislaundry" value="<?php echo $data['id_jenislaundry'] ?>">
    </div>
<div class="form-group">
          <label for="jenis_laundry">Jenis_laundry:</label>
          <input type="text" class="form-control" name="jenis_laundry" value="<?php echo $data['jenis_laundry'] ?>">
    </div>
<div class="form-group">
          <label for="nama_paket">Nama_paket:</label>
          <input type="text" class="form-control" name="nama_paket" value="<?php echo $data['nama_paket'] ?>">
    </div>
<div class="form-group">
          <label for="harga">Harga:</label>
          <input type="text" class="form-control" name="harga" value="<?php echo $data['harga'] ?>">
    </div>
    <button type="submit" class="btn btn-outline-info">simpan</button>
</form>
</div>