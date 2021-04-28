<?php
  require_once 'vendor/autoload.php';
  MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398");
  MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");
  
	$statusCode = 200;
	if (isset($_POST["id"], $_POST["topic"]) && ($_POST["topic"] == 'payment')) {
	  $paymentId = $_POST["id"];
    $mp = new MercadoPago\Payment();
    $payment = $mp->get($paymentId);
    if (!empty($payment->external_reference)) {
    	$statusCode = 201;
  	}
	}
  $data = json_decode($_GET);
  file_put_contents('result.json', $data);
  file_put_contents('result.json', file_get_contents('php://input'));
  http_response_code($statusCode);
?>
