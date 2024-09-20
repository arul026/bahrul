<?php
include "koneksi.php";

// Mengambil nilai dari formulir
$id_jenis_laundry = $_POST['id_jenis_laundry'];
$qty = $_POST['qty'];
$query = mysqli_query($koneksi, "INSERT INTO transaksi(id_jenis_laundry, qty) VALUES ('$id_jenis_laundry','$qty')");
if ($query) {
    echo "Data berhasil disimpan!";
} else {
    echo "Gagal menyimpan data. Error: " . mysqli_error($koneksi);
}


// Mengarahkan kembali ke halaman tertentu setelah proses input selesai
header('location:?page=transaksi/index');
?>
