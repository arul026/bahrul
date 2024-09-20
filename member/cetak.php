<!DOCTYPE html>
<html>
<head>
 <title>CETAK PRINT DATA</title>
</head>
<body>
 
 <center>
 
 <h2>DATA MEMBER</h2>
 
 </center>
 
 <?php 
 include 'koneksi.php';
 ?>
 
 <table border="1" style="width: 100%" class="table striped">
 <tr>
 <th>Id</th>
 <th>Nama</th>
 <th>Alamat</th>
 <th>Jenis kelamin</th>
 <th>telepon</th>
 </tr>
 <?php 
 $id = 1;
 $sql = mysqli_query($koneksi,"select * from member");
 while($data = mysqli_fetch_array($sql)){
 ?>
 <tr>
 <td><?php echo $id++; ?></td>
 <td><?php echo $data['nama']; ?></td>
 <td><?php echo $data['alamat']; ?></td>
 <td><?php echo $data['jenis_kelamin']; ?></td>
 <td><?php echo $data['telepon']; ?></td>
 </tr>
 <?php 
 }
 ?>
 </table>
 
 <script>
 window.print();
 </script>
 
</body>
</html>