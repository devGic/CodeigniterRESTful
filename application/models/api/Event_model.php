<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends MY_Model {
	protected $_table = 'events';

	public function get_events()
	{
		$events = $this->event->get_all();
		return $events;
	}
	

}

