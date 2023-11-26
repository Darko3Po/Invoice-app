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

	$html = "<h5>Name: $name </h5>";
	$html .= "<h5>Email: $email </h5>";
	$html .= "<h5>Phone: $phone </h5>";
	$html .= "<h5>Address: $address </h5>";


	$pdf->loadHTML($html);

	$pdf->setPaper('A4','portrait');

	$pdf->render();

	$pdf->addInfo("Title", "Invoice");
	
	// push pdf format live 
	$pdf->stream("new file", array('Attachment'=>0));

 ?>