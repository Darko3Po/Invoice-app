<?php 
	//impoert file for pdf styles
	require_once('./dompdf/autoload.inc.php');

	use Dompdf\Dompdf;
	use Dompdf\Options;

	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];

	$options = new Options;
	$options->setChroot(__DIR__);

	$pdf = new Dompdf($options);

	$pdf->setPaper('A4','portrait');

	$html = file_get_contents('template.html');

	$html = str_replace(["{{ name }}","{{ email }}"],[$name, $email], $html);

	$pdf->loadHtml($html); 

	$pdf->render();

	$pdf->addInfo("Title", "Invoice");
	
	// push pdf format live 
	$pdf->stream("new file", array('Attachment'=>0));

 ?>