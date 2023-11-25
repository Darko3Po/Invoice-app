<?php 
	//impoert file for pdf styles
	require_once('./dompdf/autoload.inc.php');

	use Dompdf\Dompdf;
	use Dompdf\Options;

	$options = new Options;
	$options->setChroot(__DIR__);

	$pdf = new Dompdf($options);

	$html = '<h1>Invoice</h1>';

	$pdf->loadHTML($html);

	$pdf->setPaper('A4','portrait');

	$pdf->render();

	$pdf->addInfo("Title", "Invoice");
	
	// push pdf format live 
	$pdf->stream("new file", array('Attachment'=>0));

 ?>