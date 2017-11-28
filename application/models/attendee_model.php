<?php

class Attendee_model extends MY_Model {
	
	
	const DB_TABLE = 'attendee';
	const DB_TABLE_PK = 'attendee_id';
	
	public $attendee_name;
	public $email;
	public $mailing_address;
	public $city;
	public $state;
	public $zip;
	public $phone;
	public $num_attending;
	public $location;
	public $submit_date;
	public $event_date;
	public $event_id;
	
	
	public function get_all($limit = 0, $offset = 0) {
// 		if ($limit) {
// 			$query = $this->db->get($this::DB_TABLE, $limit, $offset);
// 		}
// 		else {
			$this->db->order_by('event_date', 'DESC');
			$query = $this->db->get($this::DB_TABLE);
// 		}
		$ret_val = array();
		$class = get_class($this);
		foreach ($query->result() as $row) {
			$model = new $class;
			$model->populate($row);
			$ret_val[$row->{$this::DB_TABLE_PK}] = $model;
		}
		return $ret_val;
	}





}
