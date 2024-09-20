<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ini laundry</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <center><h1>Data User</h1></center>
      <a href="?page=user/tambah" ><button class="btn btn-dark">TAMBAH DATA</button></a>
    <table class="table table-striped">
  <thead>
    <tr class="table-dark">
      <th scope="col">id_user</th>
      <th scope="col">nama</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">level</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
$query=mysqli_query($koneksi, "select * from user");
while($data=mysqli_fetch_array($query)){
    ?>
    <tr>
    <td><?= $data['id_user'] ?></td>
    <td><?= $data['nama'] ?></td>
    <td><?= $data['username'] ?></td>
    <td><?= $data['password'] ?></td>
    <td><?= $data['level'] ?></td>
    <td>
        
        <a href="?page=user/hapus&id_user=<?= $data['id_user'] ?>"><button class="btn btn-dark">hapus</button></a>
        
        <a href="?page=user/edit&id_user=<?= $data['id_user'] ?>"><button class="btn btn-dark">edit</button></a>
    </td>
</tr>
<?php
}
?>
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

</body>
</html>