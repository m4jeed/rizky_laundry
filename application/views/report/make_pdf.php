<?php
//============================================================+
// File name   : example_027.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 027 for TCPDF class
//               1D Barcodes
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
 * @abstract TCPDF - Example: 1D Barcodes.
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
//require_once('tcpdf_include.php'); // include di hilangkan

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
//$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Laporan Pelanggan');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 027', PDF_HEADER_STRING);

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
 //ini adalah halaman pdf
// set a barcode on the page footer
//$pdf->setBarcode(date('Y-m-d H:i:s'));

// set font
$pdf->SetFont('helvetica', '', 11);

// add a page
$pdf->AddPage();


$pdf->SetFont('helvetica', '', 10);

// define barcode style
$style = array(
	'position' => '',
	'align' => 'C',
	'stretch' => false,
	'fitwidth' => true,
	'cellfitalign' => '',
	'border' => true,
	'hpadding' => 'auto',
	'vpadding' => 'auto',
	'fgcolor' => array(0,0,0),
	'bgcolor' => false, //array(255,255,255),
	'text' => true,
	'font' => 'helvetica',
	'fontsize' => 8,
	'stretchtext' => 4
);

// PRINT VARIOUS 1D BARCODES

// CODE 39 - ANSI MH10.8M-1983 - USD-3 - 3 of 9.
$pdf->Cell(0, 0, 'CODE 39 - ANSI MH10.8M-1983 - USD-3 - 3 of 9', 0, 1);
$pdf->write1DBarcode('CODE 39', 'C39', '', '', '', 18, 0.4, $style, 'N');




//Close and output PDF document
$pdf->Output('example_027.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+



