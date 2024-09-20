<?php
include "koneksi.php";
$id=$_GET['id'];
$query=mysqli_query($koneksi,"select * from member where id='$id'");
$data=mysqli_fetch_array($query);
?>

<div class="container">
<h1>Edit Data</h1>
<form action="?page=member/update " method="POST" >
<div class="form-group">
          <label for="id">id:</label>
          <input type="text" class="form-control" name="id" value="<?php echo $data['id'] ?>">
    </div>
<div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
    </div>
<div class="form-group">
          <label for="alamat">Alamat:</label>
          <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'] ?>">
    </div>
<div class="form-group">
          <label for="jenis_kelamin">Jenis_kelamin:</label>
          <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'] ?>">
    </div>
<div class="form-group">
          <label for="telepon">Telepon:</label>
          <input type="text" class="form-control" name="telepon" value="<?php echo $data['telepon'] ?>">
    </div>
    <button type="submit" class="btn btn-outline-dark">simpan</button>
</form>
</div>