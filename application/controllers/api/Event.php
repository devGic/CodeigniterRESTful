<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Event extends REST_Controller {

	function __construct()
	{
		parent::__construct();	
	}

	

	public function index_get(){
		$this->response('Hello from Evnet controller');
	}

	
}