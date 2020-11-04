<?php namespace ProcessWire;

/**
 * PaymentsApiRequest
 * Class that stores Request and Response from API
 * 
 * @property array  $request   Request Data to API
 * @property array  $response  Response Data from API
 * @property string $url       URL to send request To
 */
class PaymentsApiRequest extends WireData {
	public function __construct() {
		$this->request  = null;
		$this->response = null;
		$this->url      = '';
	}
}
