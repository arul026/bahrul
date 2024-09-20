<?php
include "koneksi.php";
?>
<div>
  
</div>
<h1 class="mt-4">TRANSAKSI</h1>

<a href="?page=transaksi/tambah"><button type="button" class="btn btn-dark">Tambah</button></a>

<br>
<form action="" method="POST">
  NAMA MEMBER
  <div class="mb-3">
    <select class="form-select" name="id_member" id="id_member">
      <?php
      $query = mysqli_query($koneksi, "select * from member");
      while ($data = mysqli_fetch_array($query)) {
      ?>
        <option value="<?php echo $data['id']; ?>"><?php echo $data['nama'] ?></option>
      <?php
      }
      ?>
    </select>
  </div>
  <button class="btn btn-primary" type="submit">Selesai</button>
</form>



<?php
session_start(); 

if (isset($_POST['simpan'])) {
  // Menyimpan ke tabel
  $id_jenis_laundry = $_POST['id_jenis_laundry'];
  $qty = $_POST['qty'];

  $query = mysqli_query($koneksi, "INSERT INTO transaksi (id_jenis_laundry, qty) VALUES ('$id_jenis_laundry', '$qty')");
}

?>


<hr>
<table class="table table-striped">
  <tr>  
    <th>No</th>
    <th>Nama Paket</th>
    <th>Harga</th>
    <th>Qty</th>
    <th>Jumlah</th>
    <th>Aksi</th>
  </tr>
  <?php
  $query = mysqli_query($koneksi, "SELECT jenis_laundry.nama_paket, jenis_laundry.harga, transaksi.id, transaksi.qty 
  FROM jenis_laundry 
  JOIN transaksi ON transaksi.id_jenis_laundry = jenis_laundry.id_jenislaundry");

  $total = 0;
  $no = 1;
  while ($data = mysqli_fetch_array($query)) {
  ?>
    <tr>
      <td><?php echo  $no++ ?></td>
      <td><?php echo  $data['nama_paket']  ?></td>
      <td><?php echo  $data['harga']  ?></td>
      <td><?php echo  $data['qty']  ?></td>
      <td><?php echo  $data['harga'] * $data['qty']  ?></td>
      <td><button class="btn btn-warning"><a style="color: white; text-decoration: none;" href="?page=transaksi/hapus&id=<?php echo $data['id'] ?>">Hapus</a></button></td>
    </tr>
  <?php
    $total = $total + ($data['harga'] * $data['qty']);
  }
  ?>
  <tr>
    <th colspan="4">Total</th>
    <th><?php echo $total; ?></th>
    <td></td>
  </tr>

</table>