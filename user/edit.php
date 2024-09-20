<?php
include "koneksi.php";
$id_user=$_GET['id_user'];
$query=mysqli_query($koneksi,"select * from user where id_user='$id_user'");
$data=mysqli_fetch_array($query);
?>

<div class="container">
<h1>Edit Data</h1>
<form action="?page=user/update " method="POST" >
<div class="form-group">
          <label for="id_user">Id_user:</label>
          <input type="text" class="form-control" name="id_user" value="<?php echo $data['id_user'] ?>">
    </div>
<div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
    </div>
<div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" name="username" value="<?php echo $data['username'] ?>">
    </div>
<div class="form-group">
          <label for="password">Password:</label>
          <input type="text" class="form-control" name="password" value="<?php echo $data['password'] ?>">
    </div>
<div class="form-group">
          <label for="level">level:</label>
          <input type="text" class="form-control" name="level" value="<?php echo $data['level'] ?>">
    </div>
    <button type="submit" class="btn btn-outline-info">simpan</button>
</form>
</div>