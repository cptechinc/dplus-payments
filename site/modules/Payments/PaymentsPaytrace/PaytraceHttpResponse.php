<?php namespace ProcessWire;

/**
 * PaytraceHttpResponse 
 * Class that Stores Paytrace HTTP Response
 * 
 * @property bool   $error    Did Error Occur?
 * @property string $message  Status Message
 * @property string $json     JSON Response
 * @property int    $httpcode HTTP Response Code
 * @property array  $headers  HTTP Response Headers
 */
class PaytraceHttpResponse extends WireData {
	public function __construct() {
		$this->error = false;
		$this->message = '';
		$this->json = '';
		$this->httpcode = 0;
		$this->headers = [];
	}
}
	