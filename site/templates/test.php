<?php
	// header('Content-Type: application/json');
	// $paym = $modules->get('Payments');
	// $paym->process('104');
	// echo json_encode($paym->gateway->api->request);

	$request = PaymentQuery::create()->filterByRectype('REQ')->filterByOrdn('104')->findOne();
	$request->set_salt($request->ordn);
	$request->encrypt_cvv();
	$request->encrypt_cardnumber();

