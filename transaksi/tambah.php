
<?php 

include 'koneksi.php';

?>

<form action="?page=transaksi/simpan" method="POST">

  <div class="mb-3">
    NAMA PAKET <select class="form-select" name="id_jenis_laundry" id="id_jenis_laundry">
      <?php
      $query = mysqli_query($koneksi, "select * from jenis_laundry");
      while ($data = mysqli_fetch_array($query)) {
      ?>
        <option value="<?php echo $data['id_jenislaundry']; ?>"><?php echo $data['nama_paket']; ?></option>
      <?php
      }
      ?>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label" for="qty">Qty</label>
    <input type="text" class="form-control" name="qty" id="qty">
  </div>
  <br>
  <br>
  <button class="btn btn-success" name="simpan" type="submit">Simpan</button>
</form>