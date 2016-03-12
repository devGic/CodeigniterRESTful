<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Event extends REST_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('api/Event_model','event');	
	}

	

	public function index_get(){
		$events = $this->event->get_events();
		$this->response(msg_success($events));

	}

	
}