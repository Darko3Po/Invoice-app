<?php 
	//impoert file for pdf styles
	require_once('./dompdf/autoload.inc.php');

	use Dompdf\Dompdf;
	use Dompdf\Options;

	$invoice_name = $_POST['invoice_name'];
	$number_invoice = $_POST['number_invoice'];
	$date_invoice = $_POST['date_invoice'];
	$id_product = $_POST['id_product'];

//    change date format
    $newDateFormat = date("d-m-y",strtotime($date_invoice));

	$your_name = $_POST['your_name'];
	$your_email = $_POST['your_email'];
	$your_address = $_POST['your_address'];
	$your_phone = $_POST['your_phone'];

	$client_name = $_POST['client_name'];
	$client_email = $_POST['client_email'];
	$client_address = $_POST['client_address'];
	$client_phone = $_POST['client_phone'];

	$number_invoice = $_POST['number_invoice'];

	$name_product_1 = $_POST['name_product_1'];
	$rate_1 = $_POST['rate_1'];
	$qty_1 = $_POST['qty_1'];
	$amount_1 = $rate_1 * $qty_1;

	$name_product_2 = $_POST['name_product_2'];
	$rate_2 = $_POST['rate_2'];
	$qty_2 = $_POST['qty_2'];
	$amount_2 = $rate_2 * $qty_2;

	$name_product_3 = $_POST['name_product_3'];
	$rate_3 = $_POST['rate_3'];
	$qty_3 = $_POST['qty_3'];
	$amount_3 = $rate_3 * $qty_3;

	$subtotal = $amount_1 + $amount_2 + $amount_3;


	$stavke = array("Description"=>"Loremispum","Price"=>"35","quantity"=>"10");

	$options = new Options;
	$options->setChroot(__DIR__);

	$pdf = new Dompdf($options);

	$pdf->setPaper('A4','portrait');

	$html = file_get_contents('template.html');

	$html = str_replace(["{{ stavke }}","{{ invoice_name }}","{{ number_invoice }}","{{ newDateFormat }}","{{ your_name }}","{{ your_email }}","{{ your_address }}","{{ your_phone }}","{{ client_name }}","{{ client_email }}","{{ client_address }}","{{ client_phone }}","{{ name_product_1 }}","{{ rate_1 }}","{{ qty_1 }}","{{ amount_1 }}","{{ id_product }}","{{ name_product_2 }}","{{ rate_2 }}","{{ qty_2 }}","{{ amount_2 }}","{{ name_product_3 }}","{{ rate_3 }}","{{ qty_3 }}","{{ amount_3 }}","{{ subtotal }}"],[$stavke,$invoice_name,$number_invoice,$newDateFormat,$your_name, $your_email, $your_address,$your_phone,$client_name,$client_email,$client_address,$client_phone,$name_product_1,$rate_1,$qty_1,$amount_1,$id_product,$name_product_2,$rate_2,$qty_2,$amount_2,$name_product_3,$rate_3,$qty_3,$amount_3,$subtotal], $html);

	$pdf->loadHtml($html); 

	$pdf->render();

	$pdf->addInfo("Title", "Invoice");
	
	// push pdf format live 
	$pdf->stream("new file", array('Attachment'=>0));


 ?>