<?php

ob_start();
session_start();
require('lib/fpdf.php');

$koneksi=mysqli_connect("localhost","root","","laundry_bahrul");

$query=mysqli_query($koneksi,"SELECT max(nota) as nota, tanggal from transaksi");
$data=mysqli_fetch_array($query);
$nota=$data ['nota'];
$tanggal = date('d-m-Y');

$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();

$pdf->SetFont('Times','B',13);
$pdf->Cell(70,12,'Kembali Transaksi','','','',false, "../index.php?page=transaksi/index");

$pdf->Cell(10,15,'',0,1);
$pdf->Cell(200,7,'No nota: '.$nota,0,0,'L');
$pdf->Cell(10,10,'',0,1);

$pdf->SetFont('Times','B',13);
$pdf->Cell(200,8,'Tanggal: '.$tanggal,0,0,'L');
$pdf->Cell(10,10,'',0,1);

$pdf->Cell(200,7,'Transaksi: '.$transaksi,0,0,'C');
$pdf->Cell(10,10,'',0,1);

$pdf->SetFont('Times','B',13);
$pdf->Cell(10,7,'No',1,0,'C');
$pdf->Cell(70,7,'Jenis Laundry',1,0,'L');
$pdf->Cell(45,7,'Harga',1,0,'C');
$pdf->Cell(20,7,'Qty',1,0,'C');
$pdf->Cell(35,7,'Jumlah',1,0,'C');

$pdf->SetFont('Times','',11);

$query = mysqli_query($koneksi, "SELECT transaksi.id, jenis_laundry.nama_paket, jenis_laundry.harga, transaksi.qty
  FROM transaksi 
  LEFT JOIN jenis_laundry ON transaksi.id_jenis_laundry = jenis_laundry.id_jenislaundry
  WHERE transaksi.nota = '$nota'");
  $total=0;
  $no=1;
  if (mysqli_num_rows($query) > 0) {
  while($d = mysqli_fetch_array($query)){
    $pdf->Cell(10,6, $no++,1,0,'C');
    $pdf->Cell(70,6, $d['nama_paket'],1,0,'L');
    $pdf->Cell(45,6, $d['harga'],1,0,'C');
    $pdf->Cell(20,6, $d['qty'],1,0,'C');
    $pdf->Cell(35,6, $d['qty']*$d['harga'],1,1,'C');
    $total=$total+($d['harga']*$d['qty']);
  }
  } else {
    $pdf->Cell(180, 6, 'Tidak ada transaksi untuk nomor nota ' . $nota, 1, 1, 'C');
  }

  $pdf->SetFont('Times','B',11);
  $pdf->Cell(145,7,'Total',1,0);
  $pdf->Cell(35,7,$total,1,0,'C');

  $pdf->Output();

?>
