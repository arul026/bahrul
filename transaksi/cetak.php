<h1>Cetak</h1>
<?php
// memanggil library FPDF
ob_start();
session_start();
require('lib/fpdf.php');

include '..\koneksi.php';
$query=mysqli_query($koneksi,"select max(nota) as nota, tanggal from transaksi");
$data=mysqli_fetch_array($query);
$nota=$data ['nota']+1;
$user=$_SESSION['username'];
$tanggal = date('d-m-Y');
$query=mysqli_query($koneksi,"update transaksi set nota,='$nota',status='1',username='$user' where status='o'");

// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();

$pdf->SetFont('Times','B',13);
$pdf->Cell(70,12,'Kembali Transaksi','','','',false, "../?page=transaksi/index");
$pdf->Cell(10,15,'',0,1);
$pdf->Cell(200,7,'No nota: '.$nota,0,0,'L');
$pdf->Cell(10,10,'',0,1);

$pdf->SetFont('Times','B',13);
$pdf->Cell(200,8,'Tanggal: '.$tanggal,0,0,'L');
$pdf->Cell(10,10,'',0,1);

$pdf->Cell(200,7,'Transaksi: '.$transaksi,0,0,'C');
$pdf->Cell(10,10,'',0,1);
$pdf->SetFont('Times','B',11);
$pdf->Cell(10,7,'No',1,0,'C');
$pdf->Cell(80,7,'Jenis Laundry',1,0,'L');
$pdf->Cell(45,7,'Harga',1,0,'C');
$pdf->Cell(20,7,'Qty',1,0,'C');
$pdf->Cell(35,7,'Jumlah',1,0,'C');

$pdf->Cell(107,'',0,1);
$pdf->SetFont('Times','',11);
$no=1;
$total=0;
$query = mysqli_query($koneksi, "SELECT jenis_laundry.nama_paket, jenis_laundry.harga, transaksi.id, transaksi.qty ,transaksi.tanggal
  FROM jenis_laundry 
  JOIN transaksi ON transaksi.id_jenis_laundry = jenis_laundry.id_jenislaundry
  WHERE
  transaksi.nota = '$nota'");
  while($d = mysqli_fetch_array($query)){
    $pdf->Cell(10,6, $no++,1,0,'C');
    $pdf->Cell(80,6, $d['nama_jenislaundry'],1,0,'L');
    $pdf->Cell(45,6, $d['harga'],1,0,'C');
    $pdf->Cell(20,6, $d['qty'],1,0,'C');
    $pdf->Cell(35,6, $d['qty']*$d['harga'],1,1,'C');
    $total=$total+($d['qty']*$d['harga']);

  }
  $pdf->SetFont('Times','B',11);
  $pdf->Cell(10,7,'',1,0,'C');
  $pdf->Cell(145,7,'Total',1,0);
  $pdf->Cell(35,7,$total,1,1,'C');
  $pdf->SetFont('Times','B',11);

  $pdf->Output();

?>
