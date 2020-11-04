<?php namespace ProcessWire;

/**
 * PaymentsCredentials
 * Class that Stores API Credentials
 * 
 * @property string $login            API Login ID
 * @property string $key              API Transaction Key / Password
 * @property bool   $sandbox          Send Requests to Sandbox?
 * @property string $integratorid     (Paytrace) Integrator ID
 */
class PaymentsCredentials extends WireData {
	public function __construct() {
		$this->login = '';
		$this->key = '';
		$this->sandbox = true;
		$this->integratorid = '';
	}
}
