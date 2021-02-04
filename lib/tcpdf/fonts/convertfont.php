include('../tcpdf.php');
$pdf = new TCPDF_FONTS('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->addTTFfont('./Adobe - HelveticaNeueLTStd-BdEx.otf', 'TrueTypeUnicode');