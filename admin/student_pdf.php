<?php
//============================================================+
// File name   : example_048.php
// Begin       : 2009-03-20
// Last Update : 2013-05-14
//
// Description : Example 048 for TCPDF class
//               HTML tables and table headers
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
 * @abstract TCPDF - Example: HTML tables and table headers
 * @author Nicola Asuni
 * @since 2009-03-20
 */

// Include the main TCPDF library (search for installation path).
require_once('TCPDF/tcpdf.php');
require_once "includes/connection.php";

$select_user = "SELECT username,email,course_name FROM users  where user_type='student' ORDER BY user_id DESC";

$results = $conn->query($select_user);


// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
//$pdf->SetCreator(PDF_CREATOR);
//$pdf->SetAuthor('Nicola Asuni');
//$pdf->SetTitle('TCPDF Example 048');
//$pdf->SetSubject('TCPDF Tutorial');
//$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 048', PDF_HEADER_STRING);

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
$pdf->SetFont('helvetica', 'B', 20);

// add a page
$pdf->AddPage();

$pdf->Write(0, 'List of Units', '', 0, 'L', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 8);

// -----------------------------------------------------------------------------


//$pdf->writeHTML($tbl, true, false, false, false, '');

// -----------------------------------------------------------------------------



//$pdf->writeHTML($tbl, true, false, false, false, '');

// -----------------------------------------------------------------------------


//$pdf->writeHTML($tbl, true, false, false, false, '');

// -----------------------------------------------------------------------------

//$pdf->writeHTML($tbl, true, false, false, false, '');

// -----------------------------------------------------------------------------

// Table with rowspans and THEAD


//$pdf->writeHTML($tbl, true, false, false, false, '');

//$pdf->writeHTML($tbl, true, false, false, false, '');

// -----------------------------------------------------------------------------

// NON-BREAKING TABLE (nobr="true")


//$pdf->writeHTML($tbl, true, false, false, false, '');

// -----------------------------------------------------------------------------

// NON-BREAKING ROWS (nobr="true")

$tbl = '';
$tbl .= '
<table  width="100%" border="3">
  <thead>
    <tr>
	<th>username</th>
     <th>email</th>
<th>course name</th>
    </tr>
  </thead>

';
if($results->num_rows > 0){
  while($rows = $results->fetch_assoc()){
$tbl .= '
	username,email,course_name
	<tr>
	<td>'.$rows["username"].'</td>
		<td>'.$rows["email"].'</td>
		<td>'.$rows["course_name"].'</td>
     
		</tr>
';
  }
}


$pdf->writeHTML($tbl, true, false, false, false, '');

// -----------------------------------------------------------------------------

//Close and output PDF document
$pdf->Output('students.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
