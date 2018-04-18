<?php
//============================================================+
// File name   : example_003.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 003 for TCPDF class
//               Custom Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Custom Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

	//Page header
	public function Header() {
		// Logo
		$image_file = K_PATH_IMAGES.'tcpdf_logo.jpg';
		$this->Image($image_file, 10, 10, 25, 10, 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
		// Set font
		$this->SetFont('helvetica','' , 15);
		// Title
		$this->Cell(0, 12, 'Furniture Decor', 0, false, 'C', 0, '', 0, false, 'T', 'C');
		

	}

	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica','' , 8);
		// Page number
		$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Decor');
$pdf->SetTitle('Report');
$pdf->SetSubject('Order Details');
$pdf->SetKeywords('Decor, Furniture, Orderstatus');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', 'BI', 12);

// add a page
$pdf->AddPage();


$id=$_GET["id"];

include('connection.php');


try {	
									
			
										$sql = $conn1->prepare("SELECT * FROM po where pono='$id'");
										$sql->execute();
										while($result = $sql->fetch(PDO::FETCH_ASSOC)){
											
										$name=$result["user"];	
										$date=$result["date"];
										$address=$result["address"];
													
											
										}

									}
									catch(PDOException $e) {
										echo $e->getMessage();
															}
									

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// Test word-wrap

// create some HTML content
$html = '<hr /><br><br>
<table><tr><td>
<h5>Order ID:'.$id.'</h5>
<h5>Date:'.$date.'</h5></td><td><h5>'.$address.'</h5></td></tr></table>
<br><h4>Product Details</h4><br>';


									
			
										$sql = $conn1->prepare("SELECT * FROM podetails where pono='$id'");
										$sql->execute();
										$newtot=0;
										while($result = $sql->fetch(PDO::FETCH_ASSOC)){
											
										$name=$result["name"];	
										$id=$result["id"];
										$price=$result["price"];
										$qty=$result["quantity"];
										$newtot=$newtot+($price*$qty);
										$html=$html.'<table><tr><td width="90">Product Id:'.$id.'</td><td width="200">Name:'.$name.'</td><td  width="100">Price:'.$price.'</td><td>Quantity:'.$qty.'</td><td>Total:'.$price*$qty.'</td></tr></table>';	
											
										}
										$html=$html.'<br>Total Amount : Rs - '.$newtot.'/-';

		$html=$html.'<br><hr />K K Brothers,266,Poonthottam,Fifteen Velampalayam,Tiruppur-641652,+91 9894481310';					



// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');





// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('Order Report.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
