<?php
ob_start();
session_start();
require ('lib/fpdf.php');
$koneksi = mysqli_connect("localhost","root","","laundry_bahrul");

$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();

$pdf->SetFont('Times','B',13);
$pdf->Cell(10,7,'Id',1,0,'C');
$pdf->Cell(50,7,'Nama',1,0,'C');
$pdf->Cell(45,7,'Alamat',1,0,'C');
$pdf->Cell(50,7,'Jenis Kelamin',1,0,'C');
$pdf->Cell(35,7,'Telepon',1,1,'C');

$pdf->SetFont('Times','',11);
$i=1;
$query = mysqli_query($koneksi, "SELECT * FROM member");
while ($d = mysqli_fetch_array($query)) {
    $pdf->Cell(10,6, $i++,1,0,'C');
    $pdf->Cell(50,6, $d['nama'],1,0,'L');
    $pdf->Cell(45,6, $d['alamat'],1,0,'L');
    $pdf->Cell(50,6, $d['jenis_kelamin'],1,0,'C');
    $pdf->Cell(35,6, $d['telepon'],1,1,'C');
}

$pdf->Output();