<?php
$id=$_GET['id'];
error_reporting(0); 
 include('connection.php');
require_once("dbcontroller.php");
$db_handle = new DBController();
$result = $db_handle->runQuery("SELECT *from po where pono='$id'");
$header = array("Id", "Name", "Image", "Balance","Edited By","Time");

require('/fpdf181/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','',16);	
	$pdf->Ln();
	$pdf->Cell(150,10,"Furniture Decor",0);
	$pdf->Cell(150,10,"Po no:$id ",0);

$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial','B',12);


		


foreach($result as $row) {
	$pdf->SetFont('Arial','',12);	
	$pdf->Ln();
$addr=$row['address'];
$addr=str_replace("<br>","\n",$addr);
//$pdf->Cell(150,10,"Addresss:$newstr",'LRTB', 2);
$pdf->MultiCell(100,5,"$addr",0);
}
$pdf->Output();

$db_handle->disconnectDB();?>