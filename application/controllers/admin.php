<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {



	public function index()
	{
		$this->load->view('templates/header');
// 		$this->load->view('home');
		$this->load->model('attendee_model');
		$data['attendees'] = $this->attendee_model->get_all();
// 		var_dump($data['attendees']);
		
		$this->load->view('all_attendees', $data);
		
	}
	
	public function submit()
	{
		$this->load->model('attendee_model');
		$attendee = new Attendee_model();
		var_dump($_POST);
		foreach ($_POST as $key=>$value)
		{
			$attendee->$key = $this->input->post($key);
		}
		$attendee->save();
	}
}

	